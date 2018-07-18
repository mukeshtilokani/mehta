@extends('layouts.backend.default')

@section('pageTitle', 'Admin')
@section('plugins-style')
@endsection

@section('page-style')
@endsection

@section('content')

	@section('breadcrumbs')
	    {!! Breadcrumbs::render('admin.categories.edit') !!}
	@endsection

	<h2 class="content-heading">Edit Category</h2>
	<div class="row">
		<div class="col-md-12">
			<div class="block">
				<div class="block-content">
					{!! Form::open(['route' => ['admin.categories.update', $category->id], 'method' => 'PUT', 'class' => 'js-frm-edit-category', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
	    				@include('includes.backend.forms.category.form',['from'=>'edit'])
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
	<script type="text/javascript" src="{{ asset('backend/assets/js/custom/category.js') }}"></script>
@endsection