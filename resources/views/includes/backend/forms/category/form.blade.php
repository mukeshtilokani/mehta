<div class="form-group row">
    <label class="col-12" for="example-text-input">Name</label>
    <div class="col-md-9">
        {!! Form::text('name', $from=="edit" ? $category->name : null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    <label class="col-12" for="example-text-input">Category</label>
    <div class="col-md-9">
        {!! Form::select('parent', $parentCategories, $from=="edit" ? $category->parent_id : null, array('class' =>'form-control select2-allow-clear select2-hide-search-box', 'placeholder' =>'Select')) !!}
    </div>
</div>

<div class="form-group row">
    <label class="col-12" for="example-text-input">Description</label>
    <div class="col-md-9">
         {{ Form::textarea('description', $from=="edit" ? $category->description : null, ['class' => 'form-control', 'id' =>'description', 'rows' => '6']) }}
    </div>
</div>

<div class="form-group row">
    <div class="col-12">
        <button type="submit" class="btn btn-alt-primary">Submit</button>
        <a class="btn default" href="{{ route('admin.categories.index') }}">Cancel</a>
    </div>
</div>