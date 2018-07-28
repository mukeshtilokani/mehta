@extends('layouts.backend.default')

@section('pageTitle', 'Admin')
@section('plugins-style')
@endsection

@section('page-style')
@endsection

@section('content')
	
	@section('breadcrumbs')
    	{!! Breadcrumbs::render('products.edit') !!}
	@endsection

	<h2 class="content-heading">Edit Product</h2>
	<div class="row">
		<div class="col-md-12">
			<div class="block">
				<div class="block-content">
					{!! Form::open(['route' => ['products.update', $product->id], 'method' => 'PUT', 'class' => 'js-frm-edit-product', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
	    				@include('includes.backend.forms.product.form',['from'=>'edit'])
	    				{!! Form::hidden('removed_images', "", ['id' => 'removed_images']) !!}
		                {!! Form::hidden('newly_added_images', "", ['id' => 'newly_added_images']) !!}
		                {!! Form::hidden('updated_product_images', "", ['id' => 'updated_product_images']) !!}
		                {!! Form::hidden('existing_images_order', "", ['id' => 'existing_images_order']) !!}
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@endsection

@section('modal')
@endsection

@section('plugins-scripts')
	<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('page-scripts')
	<script type="text/javascript" src="{{ asset('backend/assets/js/custom/products.js') }}"></script>
@endsection