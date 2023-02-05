@extends('layouts.app')
@section('content')
<div class="container-fluid p-0">
    <div class="row">
    <div class="col-xl-12 col-xxl-12 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-12">
                <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">{{__('admin.employees')}}</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                    <a href="{{route('employee')}}"><i class="align-middle" data-feather="users"></i></a>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{__('admin.total')}} : {{$employees}}</h1>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">{{__('admin.roles')}}</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <a href="{{route('role')}}"><i class="align-middle" data-feather="list"></i></a>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">{{__('admin.total')}} : {{$roles}}</h1>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
</div>

<div class="row">
</div>
</div>
@endsection
