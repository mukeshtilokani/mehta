@extends('layouts.default')
@section('pageTitle', 'Product')
@section('plugins-style')
@endsection
@section('page-style')
@endsection
@section('content')

{{-- Section 1 --}}
<section class="bg-light">
	<div class="container">
		<div class="row mb-gt">
			<div class="col-12">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/products">All Products</a></li>
					<li class="breadcrumb-item"><a href="/plywoods">Plywoods</a></li>
					<li class="breadcrumb-item active" aria-current="page">Dummy Plywood</li>
				</ol>
			</div>
		</div>
		<div class="row mb-gt">
			<div class="col-12">
				<h3>Dummy Plywood</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-7 order-2 order-lg-1">
				<div class="card h-100">
					<div class="card-body">
						<h6 class="font-weight-bold">Description</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt neque debitis nulla, excepturi deleniti id consectetur aspernatur obcaecati labore, magnam ab quidem quos qui at corporis quas mollitia expedita fugit?</p>
						<h6 class="font-weight-bold">Specs</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repellat soluta officiis iste fugit, laboriosam ea veritatis necessitatibus atque id veniam illo dolores vel ipsa consequatur labore! Magnam, necessitatibus, laudantium.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-5 order-1 order-lg-2 mb-gt mb-lg-0">
				<div class="row justify-content-center">
					<div class="col-12">
						<div class="row">
							<div class="col-12">
								<a href="https://unsplash.it/1200/768.jpg?image=360" data-toggle="lightbox" data-gallery="product-gallery">
									<img src="https://unsplash.it/720.jpg?image=360" class="img-fluid">
								</a>
							</div>
						</div>
						<div class="row mt-gt">
							<div class="col-4 col-md-2 mb-gt">
								<a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="product-gallery">
									<img src="https://unsplash.it/120.jpg?image=251" class="img-fluid">
								</a>
							</div>
							<div class="col-4 col-md-2 mb-gt">
								<a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="product-gallery">
									<img src="https://unsplash.it/120.jpg?image=252" class="img-fluid">
								</a>
							</div>
							<div class="col-4 col-md-2 mb-gt">
								<a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="product-gallery">
									<img src="https://unsplash.it/120.jpg?image=253" class="img-fluid">
								</a>
							</div>
							<div class="col-4 col-md-2 mb-gt">
								<a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="product-gallery">
									<img src="https://unsplash.it/120.jpg?image=254" class="img-fluid">
								</a>
							</div>
							<div class="col-4 col-md-2 mb-gt">
								<a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="product-gallery">
									<img src="https://unsplash.it/120.jpg?image=255" class="img-fluid">
								</a>
							</div>
							<div class="col-4 col-md-2 mb-gt">
								<a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="product-gallery">
									<img src="https://unsplash.it/120.jpg?image=256" class="img-fluid">
								</a>
							</div>
							<div class="col-4 col-md-2 mb-gt">
								<a href="https://unsplash.it/1200/768.jpg?image=351" data-toggle="lightbox" data-gallery="product-gallery">
									<img src="https://unsplash.it/120.jpg?image=351" class="img-fluid">
								</a>
							</div>
							<div class="col-4 col-md-2 mb-gt">
								<a href="https://unsplash.it/1200/768.jpg?image=352" data-toggle="lightbox" data-gallery="product-gallery">
									<img src="https://unsplash.it/120.jpg?image=352" class="img-fluid">
								</a>
							</div>
							<div class="col-4 col-md-2 mb-gt">
								<a href="https://unsplash.it/1200/768.jpg?image=353" data-toggle="lightbox" data-gallery="product-gallery">
									<img src="https://unsplash.it/120.jpg?image=353" class="img-fluid">
								</a>
							</div>
							<div class="col-4 col-md-2 mb-gt">
								<a href="https://unsplash.it/1200/768.jpg?image=354" data-toggle="lightbox" data-gallery="product-gallery">
									<img src="https://unsplash.it/120.jpg?image=354" class="img-fluid">
								</a>
							</div>
							<div class="col-4 col-md-2 mb-gt">
								<a href="https://unsplash.it/1200/768.jpg?image=355" data-toggle="lightbox" data-gallery="product-gallery">
									<img src="https://unsplash.it/120.jpg?image=355" class="img-fluid">
								</a>
							</div>
							<div class="col-4 col-md-2 mb-gt">
								<a href="https://unsplash.it/1200/768.jpg?image=356" data-toggle="lightbox" data-gallery="product-gallery">
									<img src="https://unsplash.it/120.jpg?image=356" class="img-fluid">
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<a href="" class="btn btn-primary w-100">Download brochure</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
{{-- End of section 1 --}}

{{-- Products listing --}}
<section>
	<div class="container">
		<div class="row mt-gt">
			<div class="col-md-6 col-lg-4">
				<figure class="effect-lily">
					<img src="https://picsum.photos/400/400?image=101" alt=""/>
					<figcaption>
						<div>
							<h2>Title</h2>
							<p>Lily likes to play with crayons and pencils</p>
						</div>
						<a href="#">View more</a>
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-6 col-lg-4">
				<figure class="effect-lily">
					<img src="https://picsum.photos/400/400?image=102" alt=""/>
					<figcaption>
						<div>
							<h2>Title</h2>
							<p>Lily likes to play with crayons and pencils</p>
						</div>
						<a href="#">View more</a>
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-6 col-lg-4">
				<figure class="effect-lily">
					<img src="https://picsum.photos/400/400?image=103" alt=""/>
					<figcaption>
						<div>
							<h2>Title</h2>
							<p>Lily likes to play with crayons and pencils</p>
						</div>
						<a href="#">View more</a>
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-6 col-lg-4">
				<figure class="effect-lily">
					<img src="https://picsum.photos/400/400?image=104" alt=""/>
					<figcaption>
						<div>
							<h2>Title</h2>
							<p>Lily likes to play with crayons and pencils</p>
						</div>
						<a href="#">View more</a>
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-6 col-lg-4">
				<figure class="effect-lily">
					<img src="https://picsum.photos/400/400?image=106" alt=""/>
					<figcaption>
						<div>
							<h2>Title</h2>
							<p>Lily likes to play with crayons and pencils</p>
						</div>
						<a href="#">View more</a>
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-6 col-lg-4">
				<figure class="effect-lily">
					<img src="https://picsum.photos/400/400?image=107" alt=""/>
					<figcaption>
						<div>
							<h2>Title</h2>
							<p>Lily likes to play with crayons and pencils</p>
						</div>
						<a href="#">View more</a>
					</figcaption>			
				</figure>
			</div>
		</div>
	</div>
</section>
{{-- Products listing --}}

@endsection
@section('modal')
<!-- Modal -->
{{-- End of modal --}}
@endsection
@section('plugins-scripts')
<script async src="{{ asset('js/min/ekko-lightbox.min.js') }}"></script> 
@endsection
@section('page-scripts')
<script>
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
		event.preventDefault();
		$(this).ekkoLightbox({ wrapping: false });
	});
</script>
@endsection