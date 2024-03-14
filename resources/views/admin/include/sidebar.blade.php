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
            @can('stuff-panel.index')
            <li class="side-nav-item">
                <a href="{{route('stuff-panel.index')}}" class="side-nav-link ">
                    <i class="fas fa-user-cog"></i>
                    <span> Stuff Panel </span>
                </a>
            </li>
            @endcan
            @can('user_groups.index')
            <li class="side-nav-item">
                <a href="{{route('user-group.index')}}" class="side-nav-link ">
                    <i class="fas fa-users"></i>
                    <span>Users Groups</span>
                </a>
            </li>
            @endcan
            @can('online-payment-system.index')
            <li class="side-nav-item">
                <a href="{{route('online-payment-system.index')}}" class="side-nav-link ">
                    <i class="fas fa-credit-card"></i>
                    <span>Online Payment System</span>
                </a>
            </li>
            @endcan
            @can('profile.index')
            <li class="side-nav-item">
                <a href="{{route('profile.index')}}" class="side-nav-link ">
                    <i class="fas fa-id-card"></i>
                    <span>User Profiles</span>
                </a>
            </li>
            @endcan
            <li class="side-nav-item">
                <a href="javascript:void(0);" class="side-nav-link ">
                    <i class="fas fa-list-ul"></i>
                    <span>Sub Committees</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="javascript:void(0);" class="side-nav-link ">
                    <i class="fas fa-user-plus"></i>
                    <span>All Members</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="javascript:void(0);" class="side-nav-link ">
                    <i class="fas fa-poll"></i>
                    <span>Polls and Surveys</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="javascript:void(0);" class="side-nav-link ">
                    <i class="fas fa-newspaper"></i>
                    <span>Articles</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="javascript:void(0);" class="side-nav-link ">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Calendar of Events</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="javascript:void(0);" class="side-nav-link ">
                    <i class="fas fa-envelope"></i>
                    <span>Messages</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="javascript:void(0);" class="side-nav-link ">
                    <i class="fas fa-book-medical"></i>
                    <span>CME Management</span>
                </a>
            </li><li class="side-nav-item">
                <a href="javascript:void(0);" class="side-nav-link ">
                    <i class="fas fa-cogs"></i>
                    <span>Settings</span>
                </a>
            </li>

        </ul>
        <div class="clearfix"></div>

    </div>
</div>
