@extends('layouts.frontend.default')
@section('pageTitle', 'Gallery')
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
					<h1 class="hero-text font-weight-light">Our</h1>
					<h1 class="hero-text font-weight-bold">Work</h1>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- End of Hero --}}


{{-- Products listing --}}
<section>
	<div class="container">
		<div class="row gallery mt-gt">
			@foreach($galleries as $gallery)
			<div class="col-4 col-md-3 mb-gt">
				<a href="{{ $gallery->image }}" data-toggle="lightbox" data-gallery="product-gallery">
					<img src="{{ $gallery->image }}" class="img-fluid">
				</a>
			</div>
			@endforeach
{{-- 			<div class="col-4 col-md-3 mb-gt">
				<a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="product-gallery">
					<img src="https://unsplash.it/285.jpg?image=252" class="img-fluid">
				</a>
			</div>
			<div class="col-4 col-md-3 mb-gt">
				<a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="product-gallery">
					<img src="https://unsplash.it/285.jpg?image=253" class="img-fluid">
				</a>
			</div>
			<div class="col-4 col-md-3 mb-gt">
				<a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="product-gallery">
					<img src="https://unsplash.it/285.jpg?image=254" class="img-fluid">
				</a>
			</div>
			<div class="col-4 col-md-3 mb-gt">
				<a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="product-gallery">
					<img src="https://unsplash.it/285.jpg?image=255" class="img-fluid">
				</a>
			</div>
			<div class="col-4 col-md-3 mb-gt">
				<a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="product-gallery">
					<img src="https://unsplash.it/285.jpg?image=256" class="img-fluid">
				</a>
			</div>
			<div class="col-4 col-md-3 mb-gt">
				<a href="https://unsplash.it/1200/768.jpg?image=351" data-toggle="lightbox" data-gallery="product-gallery">
					<img src="https://unsplash.it/285.jpg?image=351" class="img-fluid">
				</a>
			</div>
			<div class="col-4 col-md-3 mb-gt">
				<a href="https://unsplash.it/1200/768.jpg?image=352" data-toggle="lightbox" data-gallery="product-gallery">
					<img src="https://unsplash.it/285.jpg?image=352" class="img-fluid">
				</a>
			</div>
			<div class="col-4 col-md-3 mb-gt">
				<a href="https://unsplash.it/1200/768.jpg?image=353" data-toggle="lightbox" data-gallery="product-gallery">
					<img src="https://unsplash.it/285.jpg?image=353" class="img-fluid">
				</a>
			</div>
			<div class="col-4 col-md-3 mb-gt">
				<a href="https://unsplash.it/1200/768.jpg?image=354" data-toggle="lightbox" data-gallery="product-gallery">
					<img src="https://unsplash.it/285.jpg?image=354" class="img-fluid">
				</a>
			</div>
			<div class="col-4 col-md-3 mb-gt">
				<a href="https://unsplash.it/1200/768.jpg?image=355" data-toggle="lightbox" data-gallery="product-gallery">
					<img src="https://unsplash.it/285.jpg?image=355" class="img-fluid">
				</a>
			</div>
			<div class="col-4 col-md-3 mb-gt">
				<a href="https://unsplash.it/1200/768.jpg?image=356" data-toggle="lightbox" data-gallery="product-gallery">
					<img src="https://unsplash.it/285.jpg?image=356" class="img-fluid">
				</a>
			</div> --}}
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