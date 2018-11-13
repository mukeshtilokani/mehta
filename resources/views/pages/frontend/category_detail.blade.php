@extends('layouts.frontend.default')
@section('pageTitle', 'Product Type')
@section('plugins-style')
@endsection
@section('page-style')
@endsection
@section('content')

{{-- Hero --}}
<div class="hero-container">
	<img class="hero-background" src="//source.unsplash.com/1920x600/?water" alt="">
	<div class="hero-overlay">
		<div class="container">
			<div class="row align-items-center h-100">
				<div class="col-12">
					<h1 class="hero-text font-weight-light">{{ $categoryDetail->name }}</h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/products">All Categories</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ $categoryDetail->name }}</li>
						</ol>
					</nav>

				</div>
			</div>
		</div>
	</div>
</div>
{{-- End of Hero --}}

{{-- Products listing --}}
<section class="bg-light">
	<div class="container">
		<div class="row mt-gt">
			@foreach($categoryProducts as $product)
				<div class="col-md-6 col-lg-4">
					<figure class="effect-lily">
						<img src="{{ $product->getMedia('product')->first()->getUrl('thumb') }}" alt=""/>
						<figcaption>
							<div>
								<h2>{{ $product->name }}</h2>
							</div>
							<a href="{{ route('frontend.product.detail', ['id' => $product->id]) }}">View detail</a>
						</figcaption>			
					</figure>
				</div>
			@endforeach
		</div>
	</div>
</section>
{{-- Products listing --}}

{{-- testimonial --}}
{{-- @include('includes.frontend.testimonial') --}}
{{-- End of testimonial --}}

@endsection
@section('modal')
<!-- Modal -->
{{-- End of modal --}}
@endsection
@section('plugins-scripts')
@endsection
@section('page-scripts')
@endsection