@extends('layouts.backend.default')

@section('pageTitle', 'Admin')
@section('plugins-style')
@endsection

@section('page-style')
@endsection

@section('content')
	@section('breadcrumbs')
	    {!! Breadcrumbs::render('products.create') !!}
	@endsection

	<h2 class="content-heading">Add Product</h2>
	<div class="row">
		<div class="col-md-12">
			<div class="block">
				<div class="block-content">
					{!! Form::open(['route' => 'products.store', 'class' => 'js-frm-create-product', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
	    				@include('includes.backend.forms.product.form',['from'=>'add'])
					{{ Form::close() }}
				</div>
			</div>
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