@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    {!! Form::open(['id'=>'employee-form','url'=>route('employee.save'),'class'=>'needs-validation','files'=>true]) !!}
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h1 class="h3" style="float:left">{{__('admin.add_employee')}}</h1>
                    <a href="{{route('employee')}}">
                        <span style="float:right" title="{{__('admin.list')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list align-middle me-2">
                                <line x1="8" y1="6" x2="21" y2="6"></line>
                                <line x1="8" y1="12" x2="21" y2="12"></line>
                                <line x1="8" y1="18" x2="21" y2="18"></line>
                                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                <line x1="3" y1="18" x2="3.01" y2="18"></line>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @include("shared.errors-and-messages")
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="col-6 col-lg-6">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{__('admin.first_name')}}</h5>
                    </div>
                    <div class="card-body">
                        {!! Form::text('first_name',old('first_name'),['class'=>'form-control','id'=>'first_name','placeholder'=>'Enter First Name','required'=>true]) !!}

                    </div>
                </div>
                <div class="col-6 col-lg-6">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{__('admin.last_name')}}</h5>
                    </div>
                    <div class="card-body">
                        {!! Form::text('last_name',old('last_name'),['class'=>'form-control','id'=>'last_name','placeholder'=>'Enter Last Name','required'=>true]) !!}

                    </div>
                </div>
                <div class="col-6 col-lg-6">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{__('admin.email')}}</h5>
                    </div>
                    <div class="card-body">
                        {!! Form::email('email',old('email'),['class'=>'form-control','id'=>'email','placeholder'=>'Enter Email Address','required'=>true]) !!}

                    </div>
                </div>
                <div class="col-6 col-lg-6">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{__('admin.dob')}}</h5>
                    </div>
                    <div class="card-body">
                        {!! Form::date('dob',old('dob'),['class'=>'form-control','id'=>'dob','placeholder'=>'Enter Date of Birth','required'=>true]) !!}
                    </div>
                </div>
                <div class="col-6 col-lg-6">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{__('admin.profile_image')}}</h5>
                    </div>
                    <div class="card-body">
                        {!! Form::file('profile_image',old('profile_image',null),['class'=>'form-control','id'=>'employee-profile','required'=>true]) !!}
                    </div>
                </div>

                <div class="col-6 col-lg-6">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{__('admin.current_address')}}</h5>
                    </div>
                    <div class="card-body">
                        {!! Form::textarea('current_address',old('current_address'),['class'=>'form-control','id'=>'dob','placeholder'=>'Enter Current Address','required'=>true]) !!}
                    </div>
                </div>
                <div class="col-6 col-lg-6">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{__('admin.permanent_address')}}</h5>
                    </div>
                    <div class="card-body">
                        {!! Form::textarea('permanent_address',old('permanent_address'),['class'=>'form-control','id'=>'dob','placeholder'=>'Enter Permanent Address','required'=>true]) !!}
                    </div>
                </div>

                <div class="col-6 col-lg-6">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{__('admin.roles')}}</h5>
                    </div>
                    <div class="card-body">
                        {!! Form::select('roles[]',$roles,old('roles',[]),['class'=>'form-control','id'=>'employee-roles','required'=>true,'multiple'=>true,'placeholder'=>'Select Roles']) !!}
                    </div>
                </div>
                
                <!-- <div class="col-6 col-lg-6">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{__('admin.status')}}</h5>
                    </div>
                    <div class="card-body">
                        {!! Form::select('status',[''=>trans('admin.select'),1=>trans('admin.active'),2=>trans('admin.inactive')],old('status',null),['class'=>'form-control','id'=>'employee-status','required'=>true]) !!}

                    </div>
                </div> -->
                <div class="col-12 col-lg-12">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary float-right">{{__('admin.submit')}}</button>
                    </div>
                </div>
            </div>

            <!-- </div> -->
        </div>
        {!! Form::close() !!}
    </div>
    @endsection
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>