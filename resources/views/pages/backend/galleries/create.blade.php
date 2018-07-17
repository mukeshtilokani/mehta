@extends('layouts.backend.default')
@section('pageTitle', 'Admin')
@section('plugins-style')
@endsection
@section('page-style')
@endsection
@section('content')
	<!-- Bootstrap Design -->
    <h2 class="content-heading">Add Gallery</h2>
    <div class="row">
        <div class="col-md-12">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-content">
                    {!! Form::open(['route' => 'admin.galleries.store', 'class' => 'js-frm-create-gallery', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
                        @include('includes.backend.forms.gallery.form',['from'=>'add'])
                    {{ Form::close() }}
                </div>
            </div>
            <!-- END Default Elements -->
        </div>
    </div>
    <!-- END Bootstrap Design -->
@endsection
@section('modal')
{{-- Modal --}}
{{-- End of modal --}}
@endsection
@section('plugins-scripts')
@endsection
@section('page-scripts')
    <script type="text/javascript" src="{{ asset('backend/assets/js/custom/gallery.js') }}"></script>
@endsection