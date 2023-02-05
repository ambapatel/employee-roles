@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h1 class="h3" style="float:left">{{__('admin.employees')}}</h1>
                    <a href="{{route('employee.create')}}">
                        <span style="float:right" title="{{__('admin.add')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus align-middle me-2">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                <line x1="23" y1="11" x2="17" y2="11"></line>
                            </svg>
                        </span>
                    </a>
                </div>

            </div>
        </div>
        @include("shared.errors-and-messages")

        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>{{__('admin.sn')}}</th>
                            <th>{{__('admin.first_name')}}</th>
                            <th>{{__('admin.last_name')}}</th>
                            <th>{{__('admin.email')}}</th>
                            <th>{{__('admin.roles')}}</th>
                            <th>{{__('admin.dob')}}</th>
                            <th>{{__('admin.current_address')}}</th>
                            <th>{{__('admin.permanent_address')}}</th>
                            <!-- <th>{{__('admin.status')}}</th> -->
                            <th>{{__('admin.profile')}}</th>
                            <th class="d-none d-xl-table-cell">{{__('admin.created_at')}}</th>
                            <!-- <th class="d-none d-xl-table-cell">{{__('admin.updated_at')}}</th> -->
                            <!-- <th>{{__('admin.edit')}}</th> -->
                            <th>{{__('admin.action')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($employees->count() > 0)
                        @foreach($employees as $key => $employee)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$employee->first_name}}</td>
                            <td>{{$employee->last_name}}</td>
                            <td>{{$employee->email}}</td>
                            <td>
                                @foreach ($employee->EmployeeRoles as $role)
                                {{$role->role.' '}} 
                                @endforeach
                            </td>
                            <td>{{$employee->dob}}</td>
                            <td>{{$employee->current_address}}</td>
                            <td>{{$employee->permanent_address}}</td>
                            <td><a href="{{asset('employees/'.$employee->profile_image)}}" target="_blank">
                                    <img src="{{asset('employees/'.$employee->profile_image)}}" width="50" height="50"></head>
                                </a></td>
                            <!-- <td>{{$employee->employee}}</td> -->
                            <!-- <td>
                                @if($employee->status == 1)
                                <span class="badge bg-success">{{__('admin.active')}}</span>
                                @else
                                <span class="badge bg-warning">{{__('admin.inactive')}}</span>
                                @endif
                            </td> -->
                            <td class="d-none d-xl-table-cell">{{$employee->created_at}}</td>
                            <!-- <td class="d-none d-xl-table-cell">{{$employee->updated_at}}</td> -->
                            <td class="d-none d-md-table-cell">
                                <a href="{{route('employee.edit',['id'=>$employee->id])}}"><span class="badge bg-success">{{__('admin.edit')}}</span></a>
                                {!! Form::open(['method'=>'DELETE','id'=>'employee-form-delete','url'=>route('employee.destroy',$employee->id)]) !!}
                            <!-- </td>
                            <td class="d-none d-md-table-cell"> -->
                                <button type="submit" class="btn badge bg-danger btn-sm">{{__('admin.delete')}}</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td class="d-none d-xl-table-cell text-center" colspan="10">{{__('admin.no_data')}}</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection