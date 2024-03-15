@extends('admin.layouts.app')
@section('title','Create User Group')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('user-group.index')}}">User Groups</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
                <h4 class="page-title">Create User Groups</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="main-title w-100 d-flex align-items-center justify-content-end">
                        <a href="{{route('user-group.index')}}"  class="btn btn-success btn-sm"><i class="fa fa-list fa-fw"></i>Show List</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('user-group.store')}}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label" for="name">Group Name:</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}">
                            @error('name')
                            <span class="d-block invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
