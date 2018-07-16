@extends('layouts.backend.default')

@section('pageTitle', 'Admin')
@section('plugins-style')
@endsection

@section('page-style')
@endsection

@section('content')
	@section('breadcrumbs')
	    {!! Breadcrumbs::render('admin.dashboard') !!}
	@endsection
	<div class="row gutters-tiny">
		<div class="col-md-4">
			<a class="block block-link-shadow" href="{{ route('products.index') }}">
				<div class="block-content block-content-full">
					<div class="font-size-sm font-w600 text-uppercase text-muted">Total products</div>
					<div class="py-50 text-center">
						<div class="font-size-h1 font-w700 mb-0">{{ count($products) }} </div>
					</div>
				</div>
			</a>
		</div>		
		<div class="col-md-4">
			<a class="block block-link-shadow" href="{{ route('admin.categories.index') }}">
				<div class="block-content block-content-full">
					<div class="font-size-sm font-w600 text-uppercase text-muted">Product category</div>
					<div class="py-50 text-center">
						<div class="font-size-h1 font-w700 mb-0">{{ count($productCategories) }}</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4">
			<a class="block block-link-shadow" href="javascript:void(0)">
				<div class="block-content block-content-full">
					<div class="font-size-sm font-w600 text-uppercase text-muted">Gallary</div>
					<div class="py-50 text-center">
						<div class="font-size-h1 font-w700 mb-0">0</div>
					</div>
				</div>
			</a>
		</div>		
	</div>

@endsection

@section('modal')
@endsection

@section('plugins-scripts')
@endsection

@section('page-scripts')
@endsection