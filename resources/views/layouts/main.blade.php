<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.main.header')
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              @foreach (Auth::user()->role as $role) 
                @if ($role->name == 'pimpinan')
                  @include('includes.menu.pimpinan-sidebar')
                @elseif ($role->name == 'admin') 
                  @include('includes.menu.admin-sidebar')
                @elseif ($role->name == 'back') 
                  @include('includes.menu.back-sidebar')
                @elseif ($role->name == 'front') 
                  @include('includes.menu.front-sidebar')
                @elseif ($role->name == 'perizinan') 
                  @include('includes.menu.perizinan-sidebar')
                @elseif ($role->name == 'pelayanan') 
                  @include('includes.menu.pelayanan-sidebar')
                @endif
              @endforeach
            </div>
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          @include('includes.main.main-head')
        </div>
        <!-- /top navigation -->
        <div class="right_col" role="main" >
           @if(Session::has('message'))
           <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>{{ Session::get('message') }}</strong>
            </div>
           @elseif(Session::has('error'))
           <div class="alert alert-error alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>{{ Session::get('error') }}</strong>
            </div>

          <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
          </div>
           @endif
          @yield('content')
          <!-- footer content -->
          <footer>
            @include('includes.main.footer')
          </footer>
        </div>
      </div>
    </div>
      @include('includes.main.script')
    <!-- /datepicker -->
    <!-- /footer content -->
  </body>
</html>