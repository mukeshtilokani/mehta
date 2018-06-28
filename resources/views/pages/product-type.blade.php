@extends('layouts.default')
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
					<h1 class="hero-text font-weight-light">Plywood</h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="/products">All Products</a></li>
							<li class="breadcrumb-item active" aria-current="page">Plywoods</li>
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
			<div class="col-md-6 col-lg-4">
				<figure class="effect-lily">
					<img src="https://picsum.photos/400/400?image=401" alt=""/>
					<figcaption>
						<div>
							<h2>Title</h2>
							<p>Lily likes to play with crayons and pencils</p>
						</div>
						<a href="/product">View more</a>
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-6 col-lg-4">
				<figure class="effect-lily">
					<img src="https://picsum.photos/400/400?image=402" alt=""/>
					<figcaption>
						<div>
							<h2>Title</h2>
							<p>Lily likes to play with crayons and pencils</p>
						</div>
						<a href="/product">View more</a>
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-6 col-lg-4">
				<figure class="effect-lily">
					<img src="https://picsum.photos/400/400?image=403" alt=""/>
					<figcaption>
						<div>
							<h2>Title</h2>
							<p>Lily likes to play with crayons and pencils</p>
						</div>
						<a href="/product">View more</a>
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-6 col-lg-4">
				<figure class="effect-lily">
					<img src="https://picsum.photos/400/400?image=404" alt=""/>
					<figcaption>
						<div>
							<h2>Title</h2>
							<p>Lily likes to play with crayons and pencils</p>
						</div>
						<a href="/product">View more</a>
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-6 col-lg-4">
				<figure class="effect-lily">
					<img src="https://picsum.photos/400/400?image=406" alt=""/>
					<figcaption>
						<div>
							<h2>Title</h2>
							<p>Lily likes to play with crayons and pencils</p>
						</div>
						<a href="/product">View more</a>
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-6 col-lg-4">
				<figure class="effect-lily">
					<img src="https://picsum.photos/400/400?image=407" alt=""/>
					<figcaption>
						<div>
							<h2>Title</h2>
							<p>Lily likes to play with crayons and pencils</p>
						</div>
						<a href="/product">View more</a>
					</figcaption>			
				</figure>
			</div>
		</div>
	</div>
</section>
{{-- Products listing --}}

{{-- testimonial --}}
@include('includes.testimonial')
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