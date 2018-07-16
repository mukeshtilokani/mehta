<div class="form-group row">
    <label class="col-md-3" for="example-text-input">Title</label>
    <div class="col-md-9">
        {!! Form::text('title', $from=="edit" ? $gallery->title : null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    <label class="col-md-3">Image</label>
    <div class="col-md-9 js-image-div">
        <div class="custom-file">
            <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Codebase() -> uiHelperCoreCustomFileInput()) -->
            <input type="file" class="custom-file-input js-custom-file-input-enabled" id="gallery_image" id="gallery_image" data-toggle="custom-file-input">
            <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
        </div>
        <div class="row my-4">
            <div class="col-12">
                <img src="{{ $from == 'edit' ? $gallery->image : asset('img/noimage.png') }}" width="150" class="center-block js-preview-image" />
            </div>
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-3">
    </div>
    <div class="col-md-9">
        <button type="submit" class="btn btn-alt-primary">Submit</button>
        <a class="btn default" href="{{ route('admin.galleries.index') }}">Cancel</a>
    </div>
</div>