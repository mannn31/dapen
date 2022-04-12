<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown user-menu">
        <a class="nav-link" data-toggle="dropdown" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
            {{-- <!-- User image -->
            <li class="user-header bg-primary">
              <p>
                {{ Auth::user()->name}}
                <small>Member</small>
              </p>
            </li>
            <!-- Menu Body --> --}}
            <!-- Menu Footer-->
            <li class="user-footer">
              <a href="#" class="btn btn-primary btn-flat">Profile</a>
              <a href="/logout"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
              class="btn btn-danger btn-flat float-right">
              Logout</a>
              <form id="logout-form" action="/logout" method="POST" style="display: none;">
                @csrf
            </form>
            </li>
          </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->