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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
    <nav class="navbar is-primary">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item" href="#">
            <span sr>Mr Evrey</span>
          </a>
        </div>
        <div id="navbarExampleTransparentExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="#">
              Learn
            </a>
            <a class="navbar-item" href="#">
              Discuss
            </a>
            <a class="navbar-item" href="#">
              Share
            </a>
          </div>
        </div>
        <div class="navbar-end is-hidden-touch">
            @if(Auth::guest())
              <a class="navbar-item" href="{{route('login')}}">
                Login
              </a>
              <a class="navbar-item" href="{{route('register')}}">
                Join the Community
              </a>
            @else
              <div class="navbar-item">
                <div class="field is-grouped ">
                  <p class="control">
                    <div class="dropdown is-right">
                      <div class="dropdown-trigger">
                        <a class="button is-primary " aria-haspopup="true" aria-controls="dropdown-menu">
                          <span >Hey User</span>
                          <span class="icon is-small">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                          </span>
                        </a>
                      </div>
                      <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                        <div class="dropdown-content">
                          <a href="#" class="dropdown-item">
                            Profile
                          </a>
                          <a href="#" class="dropdown-item">
                            Settings
                          </a>
                          <a href="#" class="dropdown-item">
                            Notification
                          </a>
                          <hr class="dropdown-divider">
                          <a href="#" class="dropdown-item">
                            Logout
                          </a>
                        </div>
                      </div>
                    </div>
                  </p>
                </div>
              </div>
          @endif
        </div>
      </div>
    </nav>

    @yield('content')

  </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
