@extends('layouts.backend.default')
@section('pageTitle', 'Admin')
@section('plugins-style')
@endsection
@section('page-style')
@endsection
@section('content')
	<!-- Bootstrap Design -->
    <h2 class="content-heading">Add Category</h2>
    <div class="row">
        <div class="col-md-12">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-content">
                    {!! Form::open(['route' => 'admin.categories.store', 'class' => '', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
                        @include('includes.backend.forms.category.form',['from'=>'add'])
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
@endsection