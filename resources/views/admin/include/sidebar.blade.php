<div class="leftside-menu">
    <a href="{{route('dashboard')}}" class="logo text-center logo-light">
        <span class="logo-lg ">
            <div class="d-flex justify-content-center align-items-center gap-2">
                <img src="{{asset('assets/images/mbttlogo.png')}}" alt="" style="max-height: 50px;border-radius: 50%;margin-top: 10px;">
                <h2 style="color: #fff">{{env('APP_NAME')}}</h2>
            </div>
        </span>
        <span class="logo-sm">
            <img src="{{asset('assets/images/mbttlogo.png')}}" alt="" style="max-height: 30px;border-radius: 50%;">
        </span>
    </a>
    <a href="{{route('dashboard')}}" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{asset('assets/images/mbttlogo.png')}}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{asset('assets/images/mbttlogo.png')}}" alt="" height="16">
        </span>
    </a>
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <ul class="side-nav">
            <li class="side-nav-item">
                <a href="{{route('dashboard')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="javascript:void(0);" class="side-nav-link ">
                    <i class="fas fa-user-cog"></i>
                    <span> Stuff Panel </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="javascript:void(0);" class="side-nav-link ">
                    <i class="fas fa-users"></i>
                    <span>Users Groups</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="javascript:void(0);" class="side-nav-link ">
                    <i class="fas fa-credit-card"></i>
                    <span>Online Payment System</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="javascript:void(0);" class="side-nav-link ">
                    <i class="fas fa-id-card"></i>
                    <span>User Profiles</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="javascript:void(0);" class="side-nav-link ">
                    <i class="fas fa-list-ul"></i>
                    <span>Sub Committees</span>
                </a>
            </li>
        </ul>
        <div class="clearfix"></div>

    </div>
</div>
