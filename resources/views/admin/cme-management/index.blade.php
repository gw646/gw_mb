@extends('admin.layouts.app')
@section('title','CME Management')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">CME Management</li>
                    </ol>
                </div>
                <h4 class="page-title">CME Management</h4>
            </div>
        </div>
    </div>
@endsection
