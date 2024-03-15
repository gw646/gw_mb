@extends('admin.layouts.app')
@section('title','Messages')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Messages</li>
                    </ol>
                </div>
                <h4 class="page-title">Messages</h4>
            </div>
        </div>
    </div>
@endsection
