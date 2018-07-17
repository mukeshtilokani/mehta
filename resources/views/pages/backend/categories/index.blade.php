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
			<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
				<thead>
					<tr>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell">Parent Category</th>
                        <th class="text-center" style="width: 15%;">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
					<tr>
						<td class="font-w600">{{ $category->name }}</td>
                        <td class="d-none d-sm-table-cell">{{ $category->parent ? $category->parent->name : '' }}</td>
                        <td class="text-center">
                        	<a href="categories/{{ $category->id }}/edit" class="btn btn-icon-only green">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="#" data-confirm-msg="Are you sure you would like to delete this record?" data-delete-url="categories/{{ $category->id }}" class="btn btn-icon-only red js-delete-button" data-toggle="modal" data-target="#delete_modal"><i class="fa fa-trash"></i></a>
                        </td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection

@section('modal')
@endsection

@section('plugins-scripts')
@endsection

@section('page-scripts')
	<script type="text/javascript" src="{{ asset('backend/assets/js/custom/category.js') }}"></script>
@endsection