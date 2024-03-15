@extends('admin.layouts.app')
@section('title','Dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Active Members</h3>
                </div>
                <div class="card-body">
                    <p>Active Members: <span class="badge bg-success">3120</span></p>
                    <p>Inactive Members: <span class="badge bg-secondary">120</span></p>
                    <button class="btn btn-primary">Add new member</button>
                    <!-- Add more buttons here -->
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">New Registrants (Board Membership) </h3>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-valign-middle">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($registrants as $registrant)
                            <tr>
                                <td>{{$registrant->name}}</td>
                                <td>{{adminDateTime($registrant->created_at)}}</td>
                                <td>
                                    {{$registrant->status}}                                            </td>
                                <td>
                                    <a href="https://goldan.xyz/bk/mbtt/public/user/member/16" class="btn btn-success btn-sm">
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
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Complaints</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p><strong>User Name:</strong> Lorem ipsum dolor sit amet...</p>
                            <button class="btn btn-secondary btn-sm">Open</button>

                        </li><li class="list-group-item">
                            <p><strong>User Name:</strong> Lorem ipsum dolor sit amet...</p>
                            <button class="btn btn-secondary btn-sm">Open</button>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-between mt-5 align-items-center mb-2">
                        <h4 class="header-title">Projections Vs Actuals</h4>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>
                    </div>

                    <div dir="ltr">
                        <div id="high-performing-product" class="apex-charts" data-colors="#727cf5,#e3eaef"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('style-library')
    <link href="{{asset('assets/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet"/>
@endpush
@push('script-library')
    <script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/js/pages/demo.dashboard.js')}}"></script>
@endpush
