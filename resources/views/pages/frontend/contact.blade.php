@extends('layouts.frontend.default')
@section('pageTitle', 'Contact us')
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
					<h1 class="hero-text font-weight-light">Contact</h1>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- End of Hero --}}

{{-- Section 1 --}}
<section class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">

				<div class="row">
					<div class="col-md-12">
						<div class="alert alert-success js-inquiry-success-message" role="alert" style="display: none">
							Thanks for getting in touch.<br>Someone will get back to you shortly.
						</div>
					</div>
				</div>

				{!! Form::open(['class' => 'js-contact-us-form', 'role' => 'form']) !!}
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationDefault01">First name</label>
							<input type="text" name="first_name" class="form-control" id="validationDefault01" placeholder="First name">
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationDefault02">Last name</label>
							<input type="text" name="last_name" class="form-control" id="validationDefault02" placeholder="Last name">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationDefault03">Email address</label>
							<input type="text" class="form-control" name="email_address" id="validationDefault03" aria-describedby="emailHelp" placeholder="Enter email">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationDefault04">Phone number</label>
							<input type="text" class="form-control" name="phone_number" id="validationDefault04" aria-describedby="PhoneHelp" placeholder="Mobile number">
							<small id="PhoneHelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationDefault05">City</label>
							<input type="text" class="form-control" name="city" id="validationDefault05" placeholder="City">
						</div>
						<div class="col-md-3 mb-3">
							<label for="validationDefault06">State</label>
							<input type="text" class="form-control" name="state" id="validationDefault06" placeholder="State">
						</div>
						<div class="col-md-3 mb-3">
							<label for="validationDefault07">Zip</label>
							<input type="text" class="form-control" name="zip" id="validationDefault07" placeholder="Zip">
						</div>
					</div>
					<div class="form-group">
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customCheck1">
								<label class="custom-control-label" for="customCheck1">Agree to <a href="#" data-toggle="modal" data-target="#terms-conditions">terms and conditions</a></label>
							</div>
						</div>
					</div>
					<button class="btn btn-primary js-contact-us-submit-btn" type="submit">Submit form</button>
				{{ Form::close() }}
			</div>
			<div class="col-lg-5 mt-gt mt-lg-0">
				<div class="row">
					<div class="col-12">
						<h6 class="font-weght-bold">Contact us</h6>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20306.01248558328!2d70.12718950029684!3d23.07866123583832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3950b98c76dbff15%3A0x771a0836f5445a8f!2sMehta+Plywood+%7C+Plywood+Manufacturer+in+gandhidham!5e0!3m2!1sen!2sin!4v1530098858647" height="250" frameborder="0" style="border:0; width: 100%" allowfullscreen></iframe>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<small class="font-weight-bold">Address</small>
						<address class="text-muted">
							D-123, Zanda Chowk, Ward 12A, Gandhidham, Gujarat 370201
						</address>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<small class="font-weight-bold">Email address</small>
						<p class="mb-0">
							<a href="mailto:example@email.com">example@email.com</a>
						</p>
					</div>
					<div class="col-md-6">
						<small class="font-weight-bold">Phone number</small>
						<p>
							<a href="tel:+911234567890">+911234567890</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
{{-- End of section 1 --}}

@endsection
@section('modal')
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="terms-conditions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Terms and conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat libero aliquid facere, vitae deleniti. Veritatis, obcaecati excepturi quo error ipsa aspernatur enim sapiente odio, omnis accusamus alias inventore harum sunt!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
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

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/min/contact_us.min.js') }}"></script>
@endsection