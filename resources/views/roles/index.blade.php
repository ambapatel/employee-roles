@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h1 class="h3" style="float:left">{{__('admin.roles')}}</h1>
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
                </div>

            </div>
        </div>
        @include("shared.errors-and-messages")
        <!-- <div class="row"> -->
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>{{__('admin.role')}}</th>
                            <!-- <th>{{__('admin.status')}}</th> -->
                            <th class="d-none d-xl-table-cell">{{__('admin.created_at')}}</th>
                            <th class="d-none d-xl-table-cell">{{__('admin.updated_at')}}</th>
                            <th>{{__('admin.edit')}}</th>
                            <th>{{__('admin.delete')}}</th>
                            <!-- <th class="d-none d-md-table-cell">Assignee</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @if($roles->count() > 0)
                        @foreach($roles as $role)
                        <tr>
                            <td>{{$role->role}}</td>
                            <!-- <td>
                                @if($role->status == 1)
                                <span class="badge bg-success">{{__('admin.active')}}</span>
                                @else
                                <span class="badge bg-warning">{{__('admin.inactive')}}</span>
                                @endif
                            </td> -->
                            <td class="d-none d-xl-table-cell">{{$role->created_at}}</td>
                            <td class="d-none d-xl-table-cell">{{$role->updated_at}}</td>
                            <td class="d-none d-md-table-cell">
                                <a href="{{route('role.edit',['id'=>$role->id])}}"><span class="badge bg-success">{{__('admin.edit')}}</span></a>
                                {!! Form::open(['method'=>'DELETE','id'=>'role-form-delete','url'=>route('role.destroy',$role->id)]) !!}
                            </td>
                            <td class="d-none d-md-table-cell">
                                <button type="submit" class="btn badge bg-danger btn-sm">{{__('admin.delete')}}</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td class="d-none d-xl-table-cell text-center" colspan="6">{{__('admin.no_data')}}</td>
                        </tr>
                        @endif
                        <!-- <tr>
                                <td>Project Apollo</td>
                                <td class="d-none d-xl-table-cell">01/01/2021</td>
                                <td class="d-none d-xl-table-cell">31/06/2021</td>
                                <td><span class="badge bg-success">Done</span></td>
                                <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                            </tr>
                            <tr>
                                <td>Project Fireball</td>
                                <td class="d-none d-xl-table-cell">01/01/2021</td>
                                <td class="d-none d-xl-table-cell">31/06/2021</td>
                                <td><span class="badge bg-danger">Cancelled</span></td>
                                <td class="d-none d-md-table-cell">William Harris</td>
                            </tr>
                            <tr>
                                <td>Project Hades</td>
                                <td class="d-none d-xl-table-cell">01/01/2021</td>
                                <td class="d-none d-xl-table-cell">31/06/2021</td>
                                <td><span class="badge bg-success">Done</span></td>
                                <td class="d-none d-md-table-cell">Sharon Lessman</td>
                            </tr>
                            <tr>
                                <td>Project Nitro</td>
                                <td class="d-none d-xl-table-cell">01/01/2021</td>
                                <td class="d-none d-xl-table-cell">31/06/2021</td>
                                <td><span class="badge bg-warning">In progress</span></td>
                                <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                            </tr>
                            <tr>
                                <td>Project Phoenix</td>
                                <td class="d-none d-xl-table-cell">01/01/2021</td>
                                <td class="d-none d-xl-table-cell">31/06/2021</td>
                                <td><span class="badge bg-success">Done</span></td>
                                <td class="d-none d-md-table-cell">William Harris</td>
                            </tr>
                            <tr>
                                <td>Project X</td>
                                <td class="d-none d-xl-table-cell">01/01/2021</td>
                                <td class="d-none d-xl-table-cell">31/06/2021</td>
                                <td><span class="badge bg-success">Done</span></td>
                                <td class="d-none d-md-table-cell">Sharon Lessman</td>
                            </tr>
                            <tr>
                                <td>Project Romeo</td>
                                <td class="d-none d-xl-table-cell">01/01/2021</td>
                                <td class="d-none d-xl-table-cell">31/06/2021</td>
                                <td><span class="badge bg-success">Done</span></td>
                                <td class="d-none d-md-table-cell">Christina Mason</td>
                            </tr>
                            <tr>
                                <td>Project Wombat</td>
                                <td class="d-none d-xl-table-cell">01/01/2021</td>
                                <td class="d-none d-xl-table-cell">31/06/2021</td>
                                <td><span class="badge bg-warning">In progress</span></td>
                                <td class="d-none d-md-table-cell">William Harris</td>
                            </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
@endsection