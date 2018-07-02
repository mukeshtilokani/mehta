@extends('layouts.backend.default')
@section('pageTitle', 'Admin')
@section('plugins-style')
@endsection
@section('page-style')
@endsection
@section('content')

<div class="row gutters-tiny">
	<!-- Row #3 -->
	<div class="col-md-6">
		<a class="block block-link-shadow" href="javascript:void(0)">
			<div class="block-content block-content-full">
				<div class="font-size-sm font-w600 text-uppercase text-muted">Product category</div>
				<div class="py-50 text-center">
					<div class="font-size-h1 font-w700 mb-0">20</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-md-6">
		<a class="block block-link-shadow" href="javascript:void(0)">
			<div class="block-content block-content-full">
				<div class="font-size-sm font-w600 text-uppercase text-muted text-right">Total products</div>
				<div class="py-50 text-center">
					<div class="font-size-h1 font-w700 mb-0">728</div>
				</div>
			</div>
		</a>
	</div>
	<!-- END Row #3 -->
</div>

@endsection
@section('modal')
{{-- Modal --}}
{{-- End of modal --}}
@endsection
@section('plugins-scripts')
@endsection
@section('page-scripts')
@endsection