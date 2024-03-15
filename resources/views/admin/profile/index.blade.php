@extends('admin.layouts.app')
@section('title','User profile')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">User profile</li>
                    </ol>
                </div>
                <h4 class="page-title">User profile</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>New Registrants (Board Membership)
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-valign-middle">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($registrants as $registrant)
                            <tr>
                                <td>{{$registrant->name}}</td>
                                <td>{{$registrant->email}}</td>
                                <td>{{adminDateTime($registrant->created_at)}}</td>
                                <td>
                                    {{$registrant->status}}                                            </td>
                                <td>
                                    <a href="{{route('profile.edit',['id'=>$registrant->id])}}" class="btn btn-success btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No record found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
