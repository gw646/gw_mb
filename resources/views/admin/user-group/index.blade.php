@extends('admin.layouts.app')
@section('title','User Groups')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">User Groups</li>
                    </ol>
                </div>
                <h4 class="page-title">User Groups</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-end">
                    <a href="{{route('user-group.create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus fa-fw"></i>Add New</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-nowrap table-hover table-centered mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Guard</th>
                                <th scope="col">Users</th>
                                <th scope="col">Created</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($roles as $role)
                                <tr>
                                    <td >{{$role->name}}</td>
                                    <td>{{$role->guard_name}}</td>
                                    <td>{{$role->users_count}}</td>
                                    <td>{{adminDateTime($role->created_at)}}</td>
                                    <td class="table-action">
                                        <a href="{{route('user-group.access',['id'=>$role->id])}}" class="action-icon"><i class="mdi mdi-eye"></i></a>
                                        <a href="{{route('user-group.edit',['id'=>$role->id])}}" class="action-icon edit"><i class="mdi mdi-square-edit-outline"></i></a>
                                        @if($role->is_default == '0')
                                            <form id="delete-{{$role->id}}" class="d-none" action="{{route('user-group.delete')}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{$role->id}}">
                                            </form>
                                            <a href="#" onclick="deleteCall('{{$role->id}}')" class="action-icon"><i class="mdi mdi-delete"></i>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
