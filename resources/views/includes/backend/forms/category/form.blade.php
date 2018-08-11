<div class="form-group row">
    <label class="col-md-3" for="example-text-input">Name</label>
    <div class="col-md-9">
        {!! Form::text('name', $from=="edit" ? $category->name : null,['class' => 'form-control']) !!}
    </div>
</div>
<input type="hidden" id="_token" value="{{ csrf_token() }}">
<div class="form-group row">
    <label class="col-md-3" for="example-text-input">Category</label>
    <div class="col-md-9">
        {!! Form::select('parent', $parentCategories, $from=="edit" ? $category->parent_id : null, array('class' =>'form-control select2-allow-clear select2-hide-search-box', 'placeholder' =>'Select')) !!}
    </div>
</div>

<div class="form-group row">
    <label class="col-md-3">Image</label>
    <div class="col-md-9 js-image-div">
        <div class="custom-file">
            <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Codebase() -> uiHelperCoreCustomFileInput()) -->
            <input type="file" class="custom-file-input js-custom-file-input-enabled" id="category_image" name="category_image" data-toggle="custom-file-input">
            <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
        </div>
        <div class="row my-4">
            <div class="col-12">
                <img src="{{ $from == 'edit' ? $category->image : asset('img/noimage.png') }}" width="150" class="center-block js-preview-image" />
            </div>
        </div>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-3" for="example-text-input">Description</label>
    <div class="col-md-9">
        {{ Form::textarea('description', $from=="edit" ? $category->description : null, ['class' => 'form-control', 'id' =>'description', 'rows' => '6']) }}
    </div>
</div>

<div class="form-group row">
    <div class="col-md-3">
    </div>
    <div class="col-md-9">
        <button type="submit" class="btn btn-alt-primary">Submit</button>
        <a class="btn default" href="{{ route('admin.categories.index') }}">Cancel</a>
    </div>
</div>