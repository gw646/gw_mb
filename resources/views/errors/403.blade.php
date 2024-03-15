@extends('admin.layouts.app')
@section('title', __('Forbidden'))
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="text-center">
                <img src="{{asset('assets/images/file-searching.svg')}}" height="90" alt="File not found Image">

                <h1 class="text-error mt-4">403</h1>
                <h4 class="text-uppercase text-danger mt-3">{{__($exception->getMessage() ?: 'Forbidden')}}</h4>

                <a class="btn btn-info mt-3" href="{{route('dashboard')}}"><i class="mdi mdi-reply"></i> Return Home</a>
            </div> <!-- end /.text-center-->
        </div> <!-- end col-->
    </div>
@endsection

