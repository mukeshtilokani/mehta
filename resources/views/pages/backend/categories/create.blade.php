@extends('layouts.backend.default')
@section('pageTitle', 'Admin')
@section('plugins-style')
@endsection
@section('page-style')
@endsection
@section('content')
	<!-- Bootstrap Design -->
    <h2 class="content-heading">Add Category</h2>
    <div class="row">
        <div class="col-md-12">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-content">
                    <form action="be_forms_elements_bootstrap.html" method="post" enctype="multipart/form-data" onsubmit="return false;">
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-select">Parent</label>
                            <div class="col-md-9">
                                <select class="form-control" id="parent_category" name="parent_category">
                                    <option value="">Please select</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-textarea-input">Short description</label>
                            <div class="col-9">
                                <textarea class="form-control" name="short_description" rows="6" placeholder="Short description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-file-input">Image</label>
                            <div class="col-12">
                                <input type="file" id="category_image" name="category_image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Default Elements -->
        </div>
    </div>
    <!-- END Bootstrap Design -->
@endsection
@section('modal')
{{-- Modal --}}
{{-- End of modal --}}
@endsection
@section('plugins-scripts')
@endsection
@section('page-scripts')
@endsection