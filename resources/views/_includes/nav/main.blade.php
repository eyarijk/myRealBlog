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
                      <span >Hey {{Auth::user()->name}}</span>
                      <span class="icon is-small">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                      </span>
                    </a>
                  </div>
                  <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                    <div class="dropdown-content">
                      <a href="#" class="dropdown-item">
                        <span class="icon"> <i class="fa fa-fw fa-user-circle-o m-r-5"></i> </span>  Profile
                      </a>
                      <a href="#" class="dropdown-item">
                          <span class="icon"> <i class="fa fa-fw fa-bell m-r-5"></i> </span> Notification
                      </a>
                      <a href="{{route('manage.dashboard')}}" class="dropdown-item">
                        <span class="icon"> <i class="fa fa-fw fa-cog m-r-5"></i> </span> Manage
                      </a>
                      <hr class="dropdown-divider">
                      <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <span class="icon"> <i class="fa fa-fw fa-sign-out m-r-5"></i> </span> Logout
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                      </form>
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
