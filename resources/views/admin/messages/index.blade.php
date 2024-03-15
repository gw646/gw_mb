@extends('admin.layouts.app')

@section('title','Messages')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Messages</li>
                </ol>
            </div>
            <h4 class="page-title">Messages</h4>
        </div>
    </div>
</div>

<!-- Messaging UI here -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="d-grid">
                            <button class="btn btn-primary btn-block">New Message</button>
                        </div>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item">
                                <a href="#">MBTT Staff <span class="badge bg-success float-right">3</span></a>
                            </li>
                            
                            <!-- More users -->
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="chat-conversation">
                            <ul class="conversation-list">
                                <li class="clearfix">
                                    <div class="chat-avatar">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnth5-wQ3awrdVlDxI3cZO1tewLa37xD-MjQ&s" alt="male">
                                        <i>10:00</i>
                                    </div>
                                    <div class="conversation-text">
                                        <div class="ctext-wrap">
                                            <i>MBTT Staff</i>
                                            <p>Hello! 👋</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- More messages -->
                            </ul>
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Enter your message..." required>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-info"><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
