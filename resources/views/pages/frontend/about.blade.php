@extends('layouts.frontend.default')
@section('pageTitle', 'About us')
@section('plugins-style')
@endsection
@section('page-style')
@endsection
@section('content')

{{-- Section 1 --}}
<section>
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-lg-5 order-2 order-lg-1">
				<h4 class="mb-0">We Revolutionise</h4>
				<h1 class="mb-4">The Wood Industry</h1>
				{{-- <p>Founded in the year 2003, Minimax Metals & Plywood Pvt. Ltd. is an ISO 9000:2001 certified manufacturer, supplier and exporter of Plywood, Block Board, Moulded Designer Doors, Flush Doors, and many more. Our vast knowledge about wood products enables us to deliver products that hold nonpareil finishing & details.</p> --}}
				{{-- <p>Founded in the year 2003, Mehta Plywood Pvt. Ltd. is an ISO 9000:2001 certified manufacturer, supplier and exporter of Plywood, Block Board, Moulded Designer Doors, Flush Doors, and many more. Our vast knowledge about wood products enables us to deliver products that hold nonpareil finishing & details.</p> --}}
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ratione, veritatis, in at nihil earum officia quas beatae incidunt. Aspernatur obcaecati adipisci et asperiores quae reprehenderit aperiam eligendi consequuntur quos!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum enim consequatur libero vitae velit dolorem placeat ipsum reprehenderit nihil optio dolor cumque ad soluta, corrupti facere eaque impedit, magni iste!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ratione, veritatis, in at nihil earum officia quas beatae incidunt. Aspernatur obcaecati adipisci et asperiores quae reprehenderit aperiam eligendi consequuntur quos!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum enim consequatur libero vitae velit dolorem placeat ipsum reprehenderit nihil optio dolor cumque ad soluta, corrupti facere eaque impedit, magni iste!</p>
			</div>
			<div class="col-lg-6 order-1 order-lg-2 mb-sp mb-lg-0">
				<div class="row justify-content-center">
					<div class="col-8 col-md-10 col-lg-10">
						<img class="img-fluid d-block mx-auto" src="{{ asset('img/extra/wood.png') }}" alt="">
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
{{-- End of modal --}}
@endsection
@section('plugins-scripts')
@endsection
@section('page-scripts')
@endsection