@extends('layouts.frontend.default')
@section('pageTitle', 'Home')
@section('plugins-style')
@endsection
@section('page-style')
@endsection
@section('banner')
<main class="main-banner">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-12 text-center">
				<img class="banner-logo" src="{{ asset('img/logos/logo.svg') }}" alt="Logo">
			</div>
		</div>
		<div class="arrow">
			<a href="#hero">
				<div class="chevron-icon d-flex flex-column justify-content-center">
					<div class="d-flex justify-content-center">
						<div class="chevron"></div>
						<div class="chevron"></div>
						<div class="chevron"></div>
					</div>
					<span class="text">Scroll down</span>
				</div>
			</a>
		</div>
	</div>
</main>
@endsection
@section('content')

{{-- Section 1 --}}
<section id="hero">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-lg-5 order-2 order-lg-1">
				<h4 class="mb-0">We Revolutionise</h4>
				<h1 class="mb-4">The Wood Industry</h1>
				{{-- <p>Founded in the year 2003, Minimax Metals & Plywood Pvt. Ltd. is an ISO 9000:2001 certified manufacturer, supplier and exporter of Plywood, Block Board, Moulded Designer Doors, Flush Doors, and many more. Our vast knowledge about wood products enables us to deliver products that hold nonpareil finishing & details.</p> --}}
				{{-- <p>Founded in the year 2003, Mehta Plywood Pvt. Ltd. is an ISO 9000:2001 certified manufacturer, supplier and exporter of Plywood, Block Board, Moulded Designer Doors, Flush Doors, and many more. Our vast knowledge about wood products enables us to deliver products that hold nonpareil finishing & details.</p> --}}
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ratione, veritatis, in at nihil earum officia quas beatae incidunt. Aspernatur obcaecati adipisci et asperiores quae reprehenderit aperiam eligendi consequuntur quos!</p>
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
<section class="bg-light">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-lg-6">
				<div class="row">
					<div class="col-6 mb-gt">
						<img class="img-fluid" src="{{ asset('https://picsum.photos/540/540?image=101') }}" alt="">
					</div>
					<div class="col-6 mb-gt">
						<img class="img-fluid" src="{{ asset('https://picsum.photos/540/540?image=201') }}" alt="">
					</div>
					<div class="col-6 mb-gt">
						<img class="img-fluid" src="{{ asset('https://picsum.photos/540/540?image=301') }}" alt="">
					</div>
					<div class="col-6 mb-gt">
						<img class="img-fluid" src="{{ asset('https://picsum.photos/540/540?image=401') }}" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="row">
					<div class="col-12">
						<h1 class="hero-text">Our products</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<a href="" class="btn btn-primary w-100">See more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
{{-- End of section 2 --}}

{{-- testimonial --}}
@include('includes.frontend.testimonial')
{{-- End of testimonial --}}

@endsection
@section('modal')
<!-- Modal -->
{{-- End of modal --}}
@endsection
@section('plugins-scripts')
@endsection
@section('page-scripts')
<script>
	$(document).ready(function(){
		$('.cd-auto-hide-header').addClass('is-hidden');
		$(window).scroll(function(){
			var iHeight = $(".main-banner").height()-60;
			if ($(this).scrollTop() >= iHeight) {
				$('.cd-auto-hide-header').removeClass('is-hidden');
			} else {
				$('.cd-auto-hide-header').addClass('is-hidden');
			}
		});
	});
</script>
@endsection