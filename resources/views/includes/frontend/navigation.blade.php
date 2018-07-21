<header class="cd-auto-hide-header">
	<div class="container">
		<div class="logo">
			<a href="/">
				<img src="{{ asset('img/logos/logo.svg') }}" alt="Logo">
				{{-- <img src="//placehold.it/50x50" alt="Logo"> --}}
			</a>
		</div>
		<nav class="cd-primary-nav">
			<a href="#cd-navigation" class="nav-trigger">
				<span>
					<em aria-hidden="true"></em>
				</span>
			</a>
			<!-- .nav-trigger -->
			<ul id="cd-navigation">
				<li>
					<a href="/about">About</a>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" href="javascript:void(0)" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('frontend.categories') }}">All categories</a>
						@foreach($categories as $category)
							<a class="dropdown-item" href="{{ route('frontend.category.detail', ['id' => $category->id]) }}">{{ $category->name }}</a>
						@endforeach
					</div>
				</li>
				<li>
					<a href="/gallery">Gallery</a>
				</li>
				<li>
					<a href="/contact">Contact us</a>
				</li>
			</ul>
		</nav>
		<!-- .cd-primary-nav -->
	</div>
</header>
<!-- .cd-auto-hide-header -->