@extends('layouts.backend.default')

@section('pageTitle', 'Admin')

@section('plugins-style')
@endsection

@section('page-style')
@endsection

@section('content')

	@section('breadcrumbs')
	    {!! Breadcrumbs::render('products.index') !!}
	@endsection

	<div class="block">
		<div class="block-header block-header-default">
			<h3 class="block-title">Products</h3>
			<a class="btn sbold green" href="{{ route('products.create') }}"> Add New
                <i class="fa fa-plus"></i>
            </a>
		</div>
		<div class="block-content">
			@if(count($products) > 0)
				<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
	                        <th>Name</th>
	                        <th class="d-none d-sm-table-cell">Category</th>
	                        <th class="text-center" style="width: 15%;">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $product)
						<tr>
							<td class="font-w600">{{ $product->name }}</td>
	                        <td class="d-none d-sm-table-cell">{{ $product->category->name }}</td>
	                        <td class="text-center">
	                        	<a href="{{ url('products') }}/{{ $product->id }}/edit" class="btn btn-icon-only green">
	                                <i class="fa fa-edit"></i>
	                            </a>
	                            <a href="#" data-confirm-msg="Are you sure you would like to delete this record?" data-delete-url="{{ url('products') }}/{{ $product->id }}" class="btn btn-icon-only red js-delete-button" data-toggle="modal" data-target="#delete_modal"><i class="fa fa-trash"></i></a>
	                        </td>
						</tr>
						@endforeach
					</tbody>
				</table>
			@else
				<h5 class="text-center">No records found</h5>
			@endif
		</div>
	</div>
@endsection

@section('modal')
@endsection

@section('plugins-scripts')
@endsection

@section('page-scripts')
	<script type="text/javascript" src="{{ asset('backend/assets/js/custom/products.js') }}"></script>
@endsection