<div class="form-group row">
    <label class="col-12" for="example-text-input">Title</label>
    <div class="col-md-9">
        {!! Form::text('title', $from=="edit" ? $gallery->name : null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    <label class="col-12">Image</label>
    <div class="col-12 js-image-div">
        <img src="{{ $from == 'edit' ? $gallery->image : asset('img/noimage.png') }}" width="150" class="center-block js-preview-image" />
        <label class="custom-file">
            <input type="file" class="" id="gallery_image" name="gallery_image" />
            <span class="custom-file-control"></span>
        </label>
    </div>
</div>

<div class="form-group row">
    <div class="col-12">
        <button type="submit" class="btn btn-alt-primary">Submit</button>
        <a class="btn default" href="{{ route('admin.galleries.index') }}">Cancel</a>
    </div>
</div>