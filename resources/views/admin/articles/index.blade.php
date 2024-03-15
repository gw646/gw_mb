@extends('admin.layouts.app')

@section('title','Articles')

@push('css')
    <!-- SimpleMDE css -->
    <link href="{{ asset('assets/css/vendor/simplemde.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Articles</li>
                </ol>
            </div>
            <h4 class="page-title">Articles</h4>
        </div>
        <!-- SimpleMDE Markdown Editor -->
        <textarea id="simplemde1"></textarea>
    </div>
</div>
@endsection

@push('scripts')
    <!-- SimpleMDE js -->
    <script src="{{ asset('assets/js/vendor/simplemde.min.js') }}"></script>
    <!-- Initialize SimpleMDE on the textarea -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var simplemde = new SimpleMDE({ element: document.getElementById("simplemde1") });
        });
    </script>
@endpush
