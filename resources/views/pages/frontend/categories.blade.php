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
					<h1 class="hero-text font-weight-light">All Categories</h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/products">All Categories</a></li>
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
			@foreach($categories as $category)
				<div class="col-md-6 col-lg-4">
					<figure class="effect-lily">
						<img src="{{ $category->image }}" alt=""/>
						<figcaption>
							<div>
								<h2>{{ $category->name }}</h2>
								<p>{{ mb_strimwidth($category->description, 0, 70, "...") }}</p>
							</div>
							<a href="{{ route('frontend.category.detail', ['id' => $category->id]) }}">View products</a>
						</figcaption>			
					</figure>
				</div>
			@endforeach
		</div>
	</div>
</section>
{{-- Products listing --}}

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
@endsection