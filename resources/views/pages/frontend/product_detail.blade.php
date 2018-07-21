@extends('layouts.frontend.default')
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
					<li class="breadcrumb-item"><a href="{{ route('frontend.category.detail', ['id' => $productDetail->category->id]) }}">{{ $productDetail->category->name }}</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{ $productDetail->name }}</li>
				</ol>
			</div>
		</div>
		<div class="row mb-gt">
			<div class="col-12">
				<h3>{{ $productDetail->name }}</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-7 order-2 order-lg-1">
				<div class="card h-100">
					<div class="card-body">
						<h6 class="font-weight-bold">Description</h6>
						{{ $productDetail->description }}
					</div>
				</div>
			</div>
			<div class="col-lg-5 order-1 order-lg-2 mb-gt mb-lg-0">
				<div class="row justify-content-center">
					<div class="col-12">
						@php($allProductImages = $productDetail->getMedia('product'))
						<div class="row">
							<div class="col-12">
								<a href="{{ $allProductImages->first()->getUrl() }}" data-toggle="lightbox" data-gallery="product-gallery">
									<img src="{{ $allProductImages->first()->getUrl() }}" class="img-fluid">
								</a>
							</div>
						</div>
						<div class="row mt-gt">
							@foreach($allProductImages as $image)
								<div class="col-4 col-md-2 mb-gt">
									<a href="{{ $image->getUrl() }}" data-toggle="lightbox" data-gallery="product-gallery">
										<img src="{{ $image->getUrl() }}" class="img-fluid">
									</a>
								</div>
							@endforeach
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