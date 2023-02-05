@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    {!! Form::open(['id'=>'role-form','url'=>route('role.save'),'class'=>'needs-validation']) !!}
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h1 class="h3" style="float:left">{{__('admin.add_role')}}</h1>
                    <a href="{{route('role')}}">
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
                        <h5 class="card-title mb-0">{{__('admin.role')}}</h5>
                    </div>
                    <div class="card-body">
                        {!! Form::text('role',old('role'),['class'=>'form-control','id'=>'role','placeholder'=>'Enter role','required'=>true]) !!}
                        <!-- <input type="text" class="form-control" placeholder="Enter role"> -->
                    </div>
                </div>
                <!-- <div class="col-6 col-lg-6"> -->
                    <!-- <div class="card-header">
                        <h5 class="card-title mb-0">Textarea</h5>
                    </div>
                    <div class="card-body">
                        <textarea class="form-control" rows="2" placeholder="Textarea"></textarea>
                    </div> -->
                    <!-- </div> -->


                    <!-- <div class="col-12 col-lg-6"> -->


                    <!-- <div class="card"> -->
                    <!-- <div class="card-header">
                        <h5 class="card-title mb-0">{{__('admin.status')}}</h5>
                    </div> -->
                    <!-- <div class="card-body">
                        {!! Form::select('status',[''=>trans('admin.select'),1=>trans('admin.active'),2=>trans('admin.inactive')],old('status',null),['class'=>'form-control','id'=>'role-status','required'=>true]) !!} -->
                        <!-- <select class="form-select mb-3" name="status" id="role-status">
                            <option selected>{{__('admin.select')}}</option>
                            <option value="1">{{__('admin.active')}}</option>
                            <option value="2">{{__('admin.inactive')}}</option>

                        </select> -->

                        <!-- <select multiple class="form-control">
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                                <option>Four</option>
                            </select> -->
                    <!-- </div> -->
                <!-- </div> -->
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