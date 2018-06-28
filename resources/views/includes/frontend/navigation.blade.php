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
					<a class="dropdown-toggle" href="#" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="/products">All Products</a>
						<a class="dropdown-item" href="/product-type">Product 1</a>
						<a class="dropdown-item" href="/product-type">Product 2</a>
						<a class="dropdown-item" href="/product-type">Product 3</a>
						<a class="dropdown-item" href="/product-type">Product 4</a>
						{{-- <a class="dropdown-item" href="/messagemastr">messagemastr</a> --}}
					</div>
				</li>
				{{-- <li>
					<a href="/case-studies">Case studies</a>
				</li> --}}
				<li>
					<a href="/contact">Contact us</a>
				</li>
			</ul>
		</nav>
		<!-- .cd-primary-nav -->
	</div>
</header>
<!-- .cd-auto-hide-header -->