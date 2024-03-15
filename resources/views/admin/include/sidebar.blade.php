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
                <a href="{{route('profile.index',['id'=>auth()->id()])}}" class="side-nav-link ">
                    <i class="fas fa-id-card"></i>
                    <span>User Profiles</span>
                </a>
            </li>
            @endcan
            @can('sub-committees.index')
            <li class="side-nav-item">
                <a href="{{route('sub-committees.index')}}" class="side-nav-link ">
                    <i class="fas fa-list-ul"></i>
                    <span>Sub Committees</span>
                </a>
            </li>
            @endcan
            @can('all-members.index')
            <li class="side-nav-item">
                <a href="{{route('all-members.index')}}" class="side-nav-link ">
                    <i class="fas fa-user-plus"></i>
                    <span>All Members</span>
                </a>
            </li>
            @endcan
            @can('polls-and-survey.index')
            <li class="side-nav-item">
                <a href="{{route('polls-and-survey.index')}}" class="side-nav-link ">
                    <i class="fas fa-poll"></i>
                    <span>Polls and Surveys</span>
                </a>
            </li>
            @endcan
            @can('articles.index')
            <li class="side-nav-item">
                <a href="{{route('articles.index')}}" class="side-nav-link ">
                    <i class="fas fa-newspaper"></i>
                    <span>Articles</span>
                </a>
            </li>
            @endcan
            @can('calendar-of-events.index')
            <li class="side-nav-item">
                <a href="{{route('calendar-of-events.index')}}" class="side-nav-link ">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Calendar of Events</span>
                </a>
            </li>
            @endcan
            @can('messages.index')
            <li class="side-nav-item">
                <a href="{{route('messages.index')}}" class="side-nav-link ">
                    <i class="fas fa-envelope"></i>
                    <span>Messages</span>
                </a>
            </li>
            @endcan
            @can('cme-management.index')
            <li class="side-nav-item">
                <a href="{{route('cme-management.index')}}" class="side-nav-link ">
                    <i class="fas fa-book-medical"></i>
                    <span>CME Management</span>
                </a>
            </li>
            @endcan
            @can('settings.index')
            <li class="side-nav-item">
                <a href="{{route('settings.index')}}" class="side-nav-link ">
                    <i class="fas fa-cogs"></i>
                    <span>Settings</span>
                </a>
            </li>
            @endcan
        </ul>
        <div class="clearfix"></div>

    </div>
</div>
