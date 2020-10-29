<!-- Top navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{ route('Ecommerce') }}">{{ __('Website') }}</a>
        <!-- Form -->

        <!-- User -->
        <ul class="navbar-nav align-items-center d-md-flex">
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <div class="media-body ml-2 d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                        </div>
                    </div>
                </a>

                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="{{route("settings")}}" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="{{route("home")}}" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Dashboard') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" id="notify" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <div class="media-body ml-2 d-none d-lg-block">
                                <i class="ni ni-bell-55 " id="count_notify">
                                    {{auth()->user()->unReadNotifications->count()}}
                                </i>

                        </div>
                    </div>
                </a>

                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    @if(auth()->user()->unReadNotifications->count()==0)
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">{{ __('There are no Notification yet !') }}</h6>
                        </div>
                    @else
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">{{ __('Notification !') }}</h6>
                        </div>
                        <a  class="dropdown-item" href="{{route("notify_clear")}}" style="font-weight: 800">
                            Mark all as Read
                                <i class="ni ni-check-bold text-green"></i>
                        </a>
                        @foreach(auth()->user()->unReadNotifications as $notify)
                        <div class=" dropdown-header">
                            <a href="{{route("orders",'pending')}}" class="dropdown-item">
                                <object>
                                    <a href="{{route("notify_element",['notify'=>$notify->id])}}">
                                            <i class="ni ni-fat-remove text-red" style="font-size: 20px"></i>
                                    </a>
                                </object>
                                <span>{{$notify->data['Name']}}</span>,
                                Created At <span>{{  \Carbon\Carbon::parse($notify->data['created_at'])->format('h:m a ') }}</span>,
                                Deliverd <span>{{ $notify->data['Deliverd_After']}}</span>
                                <i class="ni ni-bold-right text-green"></i>
                            </a>
                        </div>

                        @endforeach
                    @endif


                </div>
            </li>

        </ul>
    </div>
</nav>
