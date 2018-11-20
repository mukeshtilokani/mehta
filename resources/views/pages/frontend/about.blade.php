@extends('layouts.frontend.default')
@section('pageTitle', 'About us')
@section('plugins-style')
@endsection
@section('page-style')
@endsection
@section('content')

{{-- Section 1 --}}
<section>
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-lg-5 order-2 order-lg-1">
				<h4 class="mb-0">We Revolutionise</h4>
				<h1 class="mb-4">The Wood Industry</h1>
				<p>Firstly Mehta Plywood Is and ISO 9001-2008 Certified Company, there are only a few ISO certified companies in this sector</p>
				<p>Mehta Plywood was set up at business hub city in Gandhidham during the period of 1996 with highly successful Professionals of Plywood Industry. Within a short span of time, we are well known for quality excellence in the market and its brands. Anything required by the customer can be provided from the inexhaustible inventories maintained by our company or it can source directly from manufacturer of any product as per customers need.</p>
				<p>A quest for excellence and drive for perfection invariably results in products of superior standards. Nothing serves better instance for this, than Mehta Plywood. Because when it comes to embellishing commercial establishments or residential complex, nothing even comes close to Mehta Plywood.</p>
				<p>Mehta Plywood is hence a masterpiece from professionals with abundant experience and awesome expertise. Through experiments and periodical R&D ensure that Mehta Plywood stands the rest and is truly beyond compare.</p>
			</div>
			<div class="col-lg-6 order-1 order-lg-2 mb-sp mb-lg-0">
				<div class="row justify-content-center">
					<div class="col-8 col-md-10 col-lg-10">
						<img class="img-fluid d-block mx-auto" src="{{ asset('img/extra/wood.png') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
{{-- End of section 1 --}}
{{-- Section 2 --}}
<section>
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-lg-7">
				<div class="row justify-content-center">
					<div class="col-8 col-md-10 col-lg-10">
						<img class="img-fluid d-block mx-auto" src="{{ asset('img/extra/business.jpg') }}" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-5 mt-5 mt-lg-0">
				<div class="row">
					<div class="col-lg-12 mb-5">
						<h4>Our Mission</h4>
						<p>Our mission statement is to offer innovative, high quality products at affordable price and to comply with social, environmental and human needs. </p>
					</div>
					<div class="col-lg-12">
						<h4>Our Business policy</h4>
						<p>Our business policy is to give the highest level of products & services for a long time period to our valuable customer at affordable prices which helps us to improve the satisfaction level of our customers. To ensure this we take care and keep focus of our products. We always ensure that our customer gets much more from us rather then they are seeking for.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
{{-- End of section 2 --}}
{{-- Section 3 --}}
<section>
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-8 text-center">
				<p class="font-italic text-muted">At present we Deal in ENOX (Enox Hardware Pvt. Ltd.), Century Plywood (I) Pvt. Ltd., Greenlam Industries Ltd, Pidilite Industries Ltd., Tunes - Furniture Handles, TAB Interior Pvt. Ltd, Aceline, Inque - Complete Kitchen Solution which all are India's Leading Brands.</p>
			</div>
		</div>
	</div>
</section>
{{-- End of section 3 --}}

@endsection
@section('modal')
<!-- Modal -->
{{-- End of modal --}}
@endsection
@section('plugins-scripts')
@endsection
@section('page-scripts')
@endsection