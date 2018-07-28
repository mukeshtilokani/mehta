<div class="form-group row">
    <label class="col-md-3" for="example-text-input">Name</label>
    <div class="col-md-9">
        {!! Form::text('name', $from=="edit" ? $product->name : null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    <label class="col-md-3" for="example-text-input">Category</label>
    <div class="col-md-9">
        {!! Form::select('category', $categories, $from=="edit" ? $product->category_id : null, array('class' =>'form-control select2-allow-clear select2-hide-search-box', 'placeholder' =>'Select')) !!}
    </div>
</div>

<div class="form-group row">
    <label class="col-md-3">Image</label>
    <div class="col-md-9">
        <div class="js-product-image-main-div row">
            <ul id="sortable" class="col-sm-12 product-image-sortable">
                @if($from=="edit")
                    @foreach($productImages as $media)
                        <li class="panel ui-state-default liSort js-product-image-li js-existing-product-image" data-index="{{ $loop->index }}" data-id="{{ $media->id }}">
                            <div class="form-group sorter panel-body img-block">
                                <div class="col-sm-3">
                                    <img width="150" class="js-preview-image center-block" data-index="{{ $loop->index }}" src="{{ $media->getUrl('thumb') }}" />
                                </div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="input-group js-file-input-group">
                                                <label class="input-group-btn">
                                                    <span class="btn green">
                                                        Browse&hellip; <input type="file" style="display: none;" class="form-control js-product-file" type="file" name="product_image[{{ $loop->index }}]"  multiple>
                                                    </span>
                                                </label>
                                                <input type="text" class="form-control js-file-name" value="{{ $media->file_name }}" readonly>
                                            </div>
                                            <!-- <input class="form-control js-product-file" type="file" name="product_image[{{ $loop->index }}]" /> -->
                                        </div>
                                        <div class="col-sm-3">
                                            <a class="js-remove-product-image btn green" data-index="{{ $loop->index }}" href="javascript:void(0)">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        <div class="js-add-product-image-div"><div><a href="javascript:void(0)" class="js-add-product-image btn green">Add Image</a></div></div>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-3" for="example-text-input">Description</label>
    <div class="col-md-9">
         {{ Form::textarea('description', $from=="edit" ? $product->description : null, ['class' => 'form-control', 'id' =>'js-ckeditor', 'rows' => '6']) }}
    </div>
</div>

{!! Form::hidden('image_order', '', ['id' => 'image_order']) !!}

<div class="form-group row">
    <div class="col-md-3">
    </div>
    <div class="col-md-9">
        <button type="submit" class="btn btn-alt-primary">Submit</button>
        <a class="btn default" href="{{ route('products.index') }}">Cancel</a>
    </div>
</div>
