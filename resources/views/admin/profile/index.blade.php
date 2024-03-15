@extends('admin.layouts.app')
@section('title','Profile')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <h4 class="page-title">Profile</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-12">
            <div class="card text-center">
                <div class="card-body">
                    <img src="{{asset('assets/images/users/avatar-1.jpg')}}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                    <h4 class="mb-0 mt-2">{{$user->name}}</h4>
                    <p class="text-muted font-14">{{getUserRoleNameByUserId($user->id)}}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">About Me</h4>
                </div>
                <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Education</strong>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque
                    </p>
                    <hr>
                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                    <p class="text-muted">Consectetur adipiscing elit</p>
                    <hr>
                    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                    <p class="text-muted">
                        <span class="badge bg-primary">dolor sit am</span>
                        <span class="badge bg-success">ipsum </span>
                        <span class="badge bg-danger">s</span>
                    </p>
                    <hr>
                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

        <div class="col-lg-9 col-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                        <li class="nav-item">
                            <a href="#general" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                General
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#notification" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                Notification
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#fees" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                Fees
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                CMEs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                Language and Region
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                Timeline
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="general">
                            <form>
                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input value="{{$user->name}}" type="text" class="form-control" id="name" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input value="{{$user->email}}" type="email" class="form-control" id="email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="location" class="form-label">Location</label>
                                            <input type="text" class="form-control" id="location" value="{{$user->location}}" placeholder="Enter Location">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Language</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter language" value="{{$user->languages}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-1">
                                        <div class="mb-3">
                                            <label for="userbio" class="form-label">Bio</label>
                                            <textarea class="form-control" id="userbio" rows="4" placeholder="Write something...">{{$user->bio}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-1">
                                        <div class="mb-3">
                                            <label for="userbio" class="form-label">Qualifications</label>
                                            <textarea class="form-control" id="userbio" rows="4" placeholder="Write something...">{{$user->qualifications}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="principal_place_of_practice" class="form-label">Principal Place of Practice</label>
                                            <input value="{{$user->principal_place_of_practice}}" type="text" class="form-control" name="principal_place_of_practice" id="principal_place_of_practice" >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="registration_number" class="form-label">Registration Number</label>
                                            <input type="text" name="registration_number" class="form-control" id="registration_number" value="{{$user->registration_number}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="registration_expiry" class="form-label">Registration Expiry</label>
                                            <input type="date" class="form-control" id="registration_expiry" value="{{$user->registration_expiry}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="date_of_first_registration" class="form-label">Date of First Registration</label>
                                            <input type="date" class="form-control" name="date_of_first_registration" id="date_of_first_registration" value="{{$user->date_of_first_registration}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="profession" class="form-label">Profession</label>
                                            <input type="text" class="form-control" name="profession" value="{{$user->profession}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="registration_status" class="form-label">Registration Status</label>
                                            <input type="text" class="form-control" name="registration_status" value="{{$user->registration_status}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn btn-success mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="notification">
                            <h5 class="text-uppercase"><i class="mdi mdi-briefcase me-1"></i>
                                Notification</h5>
                            <div class="timeline-alt pb-0">
                                <div class="timeline-item">
                                    <i class="mdi mdi-circle bg-info-lighten text-info timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <h5 class="mt-0 mb-1">Support Team sent you an email</h5>
                                        <p class="font-14 mb-0"><i class="far fa-clock fa-fw"></i>04:05</p>
                                        <p class="text-muted mt-1 mb-0 pb-3">Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <i class="mdi mdi-circle bg-primary-lighten text-primary timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <h5 class="mt-0 mb-1">Support Team sent you an email</h5>
                                        <p class="font-14 mb-0"><i class="far fa-clock fa-fw"></i>03:25</p>
                                        <p class="text-muted mt-1 mb-0 pb-3">Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <i class="mdi mdi-circle bg-warning-lighten text-warning timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <h5 class="mt-0 mb-1">Support Team sent you an email</h5>
                                        <p class="font-14 mb-0"><i class="far fa-clock fa-fw"></i>02:12</p>
                                        <p class="text-muted mt-1 mb-0 pb-3">Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <i class="mdi mdi-circle bg-danger-lighten text-danger timeline-icon"></i>
                                    <div class="timeline-item-info">
                                        <h5 class="mt-0 mb-1">Support Team sent you an email</h5>
                                        <p class="font-14 mb-0"><i class="far fa-clock fa-fw"></i>12:05</p>
                                        <p class="text-muted mt-1 mb-0 pb-3">Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,</p>
                                    </div>
                                </div>


                            </div>
                            <h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant me-1"></i>
                                Projects</h5>
                            <div class="table-responsive">
                                <table class="table table-borderless table-nowrap mb-0">
                                    <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Clients</th>
                                        <th>Project Name</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="assets/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Halette Boivin</td>
                                        <td>App design and development</td>
                                        <td>01/01/2015</td>
                                        <td>10/15/2018</td>
                                        <td><span class="badge badge-info-lighten">Work in Progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="assets/images/users/avatar-3.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Durandana Jolicoeur</td>
                                        <td>Coffee detail page - Main Page</td>
                                        <td>21/07/2016</td>
                                        <td>12/05/2018</td>
                                        <td><span class="badge badge-danger-lighten">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="assets/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Lucas Sabourin</td>
                                        <td>Poster illustation design</td>
                                        <td>18/03/2018</td>
                                        <td>28/09/2018</td>
                                        <td><span class="badge badge-success-lighten">Done</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="assets/images/users/avatar-6.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Donatien Brunelle</td>
                                        <td>Drinking bottle graphics</td>
                                        <td>02/10/2017</td>
                                        <td>07/05/2018</td>
                                        <td><span class="badge badge-info-lighten">Work in Progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><img src="assets/images/users/avatar-5.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Karel Auberjo</td>
                                        <td>Landing page design - Home</td>
                                        <td>17/01/2017</td>
                                        <td>25/05/2021</td>
                                        <td><span class="badge badge-warning-lighten">Coming soon</span></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="tab-pane" id="fees">
                            <h5 class="text-uppercase"><i class="fas fa-credit-card fa-fw"></i>
                                Membership Fees & Transactions</h5>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Year</th>
                                    <th>Yearly Fee</th>
                                    <th>Transaction Details</th>
                                    <th>Status</th>
                                    <th>Pay Now</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- Example Row (Repeat for each year) -->
                                <tr>
                                    <td>2023</td>
                                    <td>$200</td>
                                    <td>Transaction XYZ on [Date]</td>
                                    <td>Paid/Unpaid</td>
                                    <td>
                                        <a href="invoices" class="btn btn-primary">Pay Fees</a>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
@endsection
@push('style')
    <style>
        .nav-justified .nav-item, .nav-justified>.nav-link{
            flex-basis: unset!important;
        }
    </style>
@endpush
