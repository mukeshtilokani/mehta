<div class="footer bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-3 mb-5 mb-md-0">
				<div class="row justify-content-center justify-content-md-start">
					<div class="col-4 col-md-6">
						<a href="/">
							<img class="img-fluid" src="{{ asset('img/logos/logo.svg') }}" alt="Logo">
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<h5 class="pb-3">
					Address
				</h5>
				<p>
					D-123, Zanda Chowk,
					<br>Ward 12A, Gandhidham,
					<br>Gujarat 370201
				</p>
			</div>
			<div class="col-md-3">
				<h5 class="pb-3">
					Contacts
				</h5>
				<ul class="list-unstyled">
					<li>
						Email: <a href="mailto:sunil_mehtaply@yahoo.co.in">sunil_mehtaply@yahoo.co.in</a>
					</li>
					<li>
						Customer care: <a href="tel:+918980024699">+91 8980 024699</a>
					</li>
					<li>
						Phone: <a href="tel:+912836237050">+91 2836 237050</a>
					</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h5 class="pb-3">
					Links
				</h5>
				<ul class="list-unstyled">
					<li>
						<a href="/about">About us</a>
					</li>
					<li>
						<a href="/products">Products</a>
					</li>
					<li>
						<a href="/terms">Terms and conditions</a>
					</li>
					<li>
						<a href="/contact">Contact us</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 text-center text-md-left">
				<p class="mb-0">&copy; Copyright <?php echo date("Y"); ?> Mehta Plywoods - All Rights Reserved</p>
			</div>
			<div class="col-md-6 mt-gt mt-md-0">
				<ul class="list-inline text-center text-md-right">
					<li class="list-inline-item">
						<a href=""><i class="fab fa-facebook"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script async src="{{ asset('js/min/jquery-3.0.0.min.js') }}"><\/script>');
</script>
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
{{-- <script>
    if( !window.jQuery ) document.write('<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"><\/script>');
    </script> --}}
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script async src="{{ asset(mix('js/min/main.min.js')) }}"></script> <!-- Resource jQuery -->
    @yield('plugins-scripts')