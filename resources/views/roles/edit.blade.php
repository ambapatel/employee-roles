@extends('layouts.app')
@section('content')
<div class="container-fluid p-0">
    {!! Form::open(['method'=>'PUT','id'=>'role-form-update','url'=>route('role.update',['id'=>$role->id])]) !!}
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h1 class="h3" style="float:left">{{__('admin.edit_role')}}</h1>
                    <a href="{{route('role.create')}}">
                        <span style="float:right" title="{{__('admin.add')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus align-middle me-2">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                <line x1="23" y1="11" x2="17" y2="11"></line>
                            </svg>
                        </span>
                    </a>
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
                        {!! Form::text('role',old('role',$role->role),['class'=>'form-control','id'=>'role','placeholder'=>'Enter role','required'=>true]) !!}

                    </div>
                </div>
                <!-- <div class="col-6 col-lg-6">
                    <div class="card-header">
                        <h5 class="card-title mb-0">{{__('admin.status')}}</h5>
                    </div>
                    <div class="card-body">

                        {!! Form::select('status',[''=>trans('admin.select'),1=>trans('admin.active'),2=>trans('admin.inactive')],old('status',$role->status),['class'=>'form-control','id'=>'role-status','required'=>true]) !!}

                    </div>
                </div> -->
                <div class="col-12 col-lg-12">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary float-right">{{__('admin.update')}}</button>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    @endsection