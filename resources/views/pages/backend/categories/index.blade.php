@extends('layouts.backend.default')

@section('pageTitle', 'Admin')

@section('plugins-style')
@endsection

@section('page-style')
@endsection

@section('content')

	@section('breadcrumbs')
	    {!! Breadcrumbs::render('admin.categories.index') !!}
	@endsection
	
	<div class="block">
		<div class="block-header block-header-default">
			<h3 class="block-title">Categories</h3>
			<a class="btn sbold green" href="{{ route('admin.categories.create') }}"> Add New
                <i class="fa fa-plus"></i>
            </a>
		</div>
		<div class="block-content">
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
					<thead>
						<tr>
	                        <th>Name</th>
	                        <th class="d-none d-sm-table-cell">Parent Category</th>
							<th class="d-none d-sm-table-cell text-center" style="width: 20%;">Show on home page</th>
	                        <th class="text-center" style="width: 15%;">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($categories as $category)
						<tr>
							<td class="font-w600">{{ $category->name }}</td>
	                        <td class="d-none d-sm-table-cell">{{ $category->parent ? $category->parent->name : '' }}</td>
	                        <td class="text-center">
	                        	<input type="checkbox" name="show_on_home_page" data-category="{{ $category->id }}" class="js-show-on-home-page center" value="{{ $category->is_show_on_home_page }}" 
	                        	@if($category->is_show_on_home_page == 1 ) checked @endif>
	                        </td>
	                        <td class="text-center">
	                        	<a href="categories/{{ $category->id }}/edit" class="btn btn-icon-only green">
	                                <i class="fa fa-edit"></i>
	                            </a>
	                            <a href="#" data-confirm-msg="Are you sure you would like to delete this record?" data-delete-url="admin/categories/{{ $category->id }}" class="btn btn-icon-only red js-delete-button" data-toggle="modal" data-target="#delete_modal"><i class="fa fa-trash"></i></a>
	                        </td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>	
@endsection

@section('modal')
	<div class="modal fade" id="category_selection_alert_modal" tabindex="-1" role="dialog" aria-labelledby="modal-fromright">
	    <div class="modal-dialog modal-dialog-fromright" role="document">
	        <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-danger">
                        <h3 class="block-title">Alert</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                    	<p>Maximum 4 categories can be selected.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                        <i class="fa fa-check"></i> Got it!
                    </button>
                </div>
	        </div>
	    </div>
	</div>
@endsection

@section('plugins-scripts')
@endsection

@section('page-scripts')
	<script type="text/javascript" src="{{ asset('backend/assets/js/custom/category.js') }}"></script>
@endsection