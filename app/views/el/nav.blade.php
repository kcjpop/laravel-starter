<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('/') }}">Project name</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('/') }}">Home</a></li>
        @if (Sentry::check() === false)
        <li><a href="{{ route('login') }}">Login</a></li>
        @endif
      </ul>
        
        @if (Sentry::check())
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello {{ Sentry::getUser()->email }} <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('logout') }}">Logout</a></li>
          </ul>
        </li>
      </ul>
        @endif
    </div><!--/.nav-collapse -->
  </div>
</div>
