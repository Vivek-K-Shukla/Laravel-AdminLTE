 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
            <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
                <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                    Vivek Kumar Shukla
                </a>
                <div class="dropdown-menu dropdown-menu-right" style="left: inherit; right: 0px;">
                    <a href="http://127.0.0.1:8000/profile" class="dropdown-item">
                        <i class="mr-2 fas fa-file"></i>
                        My profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <form method="POST" action="http://127.0.0.1:8000/logout">
                        <input type="hidden" name="_token" value="lmxO6DxPMDuTy85bxznIsAtMGnIQ4PUkoRBOp0nb">                        <a href="http://127.0.0.1:8000/logout" class="dropdown-item"
                           onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="mr-2 fas fa-sign-out-alt"></i>
                            Log Out
                        </a>
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->