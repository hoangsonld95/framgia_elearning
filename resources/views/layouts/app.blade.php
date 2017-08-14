<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/bower/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/bower/components-font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
<div class="page-container">
    <header>
        <div class="container">
            <a href="{{route('welcome')}}" class="site-logo">
                <i class="gi gi-flash"></i> <strong>E-Learning</strong>
            </a>
            <nav>
                <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                    <i class="fa fa-bars"></i>
                </a>
                <ul class="site-nav">
                    <li class="visible-xs visible-sm">
                        <a href="javascript:void(0)" class="site-menu-toggle text-center">
                            <i class="fa fa-times"></i>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('home')}}" class="site-nav-sub">
                            <i class="fa fa-angle-down site-nav-arrow"></i>
                            Home
                        </a>
                        <ul>
                            <li>
                                <a href="#">Boxed Parallax</a>
                            </li>
                            <li>
                                <a href="#">Boxed Video</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('list_course', 1)}}">COURSE</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="site-nav-sub"><i
                                    class="fa fa-angle-down site-nav-arrow"></i>FORUM</a>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Search Results</a>
                            </li>
                            <li>
                                <a href="#">Product List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="site-nav-sub"><i
                                    class="fa fa-angle-down site-nav-arrow"></i>@lang('auth.language')</a>
                        <ul>
                            <li>
                                <a href="#">English</a>
                            </li>
                            <li>
                                <a href="#">Tiếng Việt</a>
                            </li>
                        </ul>
                    </li>
                    @if (Auth::guest())
                        <li>
                            <a href="{{route('login')}}" class="btn btn-primary">Log In</a>
                        </li>
                        <li>
                            <a href="{{route('register')}}" class="btn btn-success">Sign Up</a>
                        </li>
                    @else

                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                <img src="/avatar/{{Auth::user()->avatar}}" alt="" style="width:32px; height: 32px; border-radius: 50%;">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('show_profile') }}">
                                        <i class="fa fa-btn fa-user">
                                            Profile
                                        </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-btn fa-sign-out">
                                            Logout
                                        </i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif

                </ul>
            </nav>
        </div>
    </header>
    @yield('content')
</div>


<!-- Scripts -->
<script src="{{ asset('assets/bower/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/login.js') }}"></script>
</body>
</html>