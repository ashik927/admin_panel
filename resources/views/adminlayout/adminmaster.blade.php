<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('title')
    
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f1595d">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="{{URL :: asset('adminpanel/css/vendor.min.css')}}">
    <link rel="stylesheet" href="{{URL :: asset('adminpanel/css/elephant.min.css')}}">
    <link rel="stylesheet" href="{{URL :: asset('adminpanel/css/application.min.css')}}">
    <link rel="stylesheet" href="{{URL :: asset('adminpanel/css/demo.min.css')}}">
    <link rel="stylesheet" href="{{URL :: asset('adminpanel/css/signup-1.min.css')}}">
  </head>
  <body class="layout layout-header-fixed">
    <div class="layout-header">
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand navbar-brand-center" href="/admin">
            <!-- <img class="navbar-brand-logo" src="adminpanel/img/logo-inverse.svg" alt="Elephant"> -->
            <h3 style="margin-top:-15px;">Admin Panel<br><center><small>Rent Product </center></span></h3>
          </a>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
            <span class="sr-only">Toggle navigation</span>
            <span class="bars">
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
            </span>
            <span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
          </button>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="arrow-up"></span>
            <span class="ellipsis ellipsis-vertical">
              <img class="ellipsis-object" width="32" height="32" src="adminpanel/img/0180441436.jpg" alt="">
            </span>
          </button>
        </div>
        <div class="navbar-toggleable">
          <nav id="navbar" class="navbar-collapse collapse">
            <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
                <span class="bar-line bar-line-4 in"></span>
                <span class="bar-line bar-line-5 in"></span>
                <span class="bar-line bar-line-6 in"></span>
              </span>
            </button>
            <ul class="nav navbar-nav navbar-right">
              
              <li class="dropdown">
               
              <li class="dropdown">
                
              </li>
              <li class="dropdown hidden-xs">
                <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
                  <img class="circle" width="36" height="36" src="adminpanel/img/0180441436.jpg" alt="">  {{ Auth::user()->name }}
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <!-- <li>
                    <a href="upgrade.html">
                      <h5 class="navbar-upgrade-heading">
                        Upgrade Now
                        <small class="navbar-upgrade-notification">You have 15 days left in your trial.</small>
                      </h5>
                    </a>
                  </li> -->
                  <li class="divider"></li>
                  
                  <li class="divider"></li>
                  <li><a href="contacts.html">Contacts</a></li>
                  <li><a href="profile.html">Profile</a></li>
                  <li>
                  <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                  </li>
                </ul>
              </li>
              <li class="visible-xs-block">
                <a href="contacts.html">
                  <span class="icon icon-users icon-lg icon-fw"></span>
                  Contacts
                </a>
              </li>
              <li class="visible-xs-block">
                <a href="profile.html">
                  <span class="icon icon-user icon-lg icon-fw"></span>
                  Profile
                </a>
              </li>
              <li class="visible-xs-block">
                <a href="login-1.html">
                  <span class="icon icon-power-off icon-lg icon-fw"></span>
                  Sign out
                </a>
              </li>
            </ul>
            <div class="title-bar">
              <h1 class="title-bar-title">
                <span class="d-ib">@yield('subtitle')</span>
                <!-- <span class="d-ib">
                  <a class="title-bar-shortcut" href="#" title="Add to shortcut list" data-container="body" data-toggle-text="Remove from shortcut list" data-trigger="hover" data-placement="right" data-toggle="tooltip">
                    <span class="sr-only">Add to shortcut list</span>
                  </a>
                </span> -->
              </h1>
              <p class="title-bar-description">
               
              </p>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <div class="layout-main">
      <div class="layout-sidebar">
        <div class="layout-sidebar-backdrop"></div>
        <div class="layout-sidebar-body">
          <div class="custom-scrollbar">
            <nav id="sidenav" class="sidenav-collapse collapse">
              <ul class="sidenav level-1">
                <li class="sidenav-search">
                  <form class="sidenav-form" action="../../demo_madebytilde_default_2.html">
                    <div class="form-group form-group-sm">
                      <div class="input-with-icon">
                        <input class="form-control" type="text" placeholder="Search…">
                        <span class="icon icon-search input-icon"></span>
                      </div>
                    </div>
                  </form>
                </li>
                <li class="sidenav-heading">Navigation</li>
               <!--  <li class="sidenav-item has-subnav open active">
                  <a href="dashboard-1.html" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-works">&#103;</span>
                    <span class="sidenav-label">Dashboards</span>
                  </a>
                  <ul class="sidenav level-2 collapse">
                    <li class="sidenav-heading">Dashboards</li>
                    <li class="active"><a href="dashboard-1.html">Dashboard 1</a></li>
                    <li><a href="dashboard-2.html">Dashboard 2</a></li>
                    <li><a href="dashboard-3.html">Dashboard 3</a></li>
                  </ul>
                </li> -->
                 <li class="sidenav-item">
                  <a href="/admin">
                    <span class="sidenav-badge badge badge-primary"></span>
                    <span class="sidenav-icon icon icon-works">&#40;</span>
                    <span class="sidenav-label">Dashboard</span>
                  </a>
                </li>
               <!--  <li class="sidenav-item">
                  <a href="widgets.html">
                    <span class="sidenav-badge badge badge-primary">26</span>
                    <span class="sidenav-icon icon icon-works">&#40;</span>
                    <span class="sidenav-label">Widgets</span>
                  </a>
                </li> -->
               <!--  <li class="sidenav-item">
                  <a href="page-layouts.html">
                    <span class="sidenav-icon icon icon-works">&#71;</span>
                    <span class="sidenav-label">Page layouts</span>
                  </a>
                </li> -->
                <!-- <li class="sidenav-heading">Components</li> -->
                <!-- <li class="sidenav-item has-subnav">
                  <a href="dashboard-1.html#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-works">&#97;</span>
                    <span class="sidenav-label">Tables</span>
                  </a>
                  <ul class="sidenav level-2 collapse">
                    <li class="sidenav-heading">Tables</li>
                    <li><a href="static-tables.html">Static tables</a></li>
                    <li><a href="responsive-tables.html">Responsive tables</a></li>
                    <li><a href="bootstrap-tables.html">Bootstrap tables</a></li>
                    <li><a href="datatables.html">Datatables</a></li>
                    <li><a href="datatables-buttons.html">Datatables Buttons</a></li>
                    <li><a href="datatables-responsive.html">Datatables Responsive</a></li>
                    <li><a href="datatables-fixedheader.html">Datatables FixedHeader</a></li>
                    <li><a href="datatables-rowreorder.html">Datatables RowReorder</a></li>
                    <li><a href="datatables-colreorder.html">Datatables ColReorder</a></li>
                    <li><a href="datatables-scroller.html">Datatables Scroller</a></li>
                  </ul>
                </li> -->
                <li class="sidenav-item has-subnav">
                  <a href="/admin" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-works">&#97;</span>
                    <span class="sidenav-label">Category</span>
                  </a>
                  <ul class="sidenav level-2 collapse">
                    <li class="sidenav-heading">Category</li>
                    <li><a href="/admin/addCategory">Add</a></li>
                    <li><a href="/admin/editCategory">Edit</a></li>
                    <li><a href="/admin/allCategory">All Category</a></li>
                  </ul>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="dashboard-1.html#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-works">&#71;</span>
                    <span class="sidenav-label">Product</span>
                  </a>
                  <ul class="sidenav level-2 collapse">
                    <li class="sidenav-heading">Product</li>
                    <li><a href="#">Product Form</a></li>
                    <li><a href="/admin/allProduct">View</a></li>
                    <li><a href="/admin/addProduct">Add</a></li>
                    <li><a href="/admin/editProduct">Edit</a></li>
                    </ul>
                </li>
                 <li class="sidenav-item has-subnav">
                  <a href="dashboard-1.html#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-works">&#72;</span>
                    <span class="sidenav-label">Order</span>
                  </a>
                  <ul class="sidenav level-2 collapse"> 
                    <li class="sidenav-heading">Order</li>
                    <li><a href="/admin/editOrder">Edit</a></li>
                    <li><a href="/admin/allOrder">All Order</a></li>
                    </ul>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="/admin" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-works">&#73;</span>
                    <span class="sidenav-label">Seetings</span>
                  </a>
                  <ul class="sidenav level-2 collapse">
                    <li class="sidenav-heading">Seetings</li>
                    <li><a href="/admin/settingsForm">Seetings Form</a></li>
                </li>
                </ul>
              
               
              </ul>
            </nav>
          </div>
        </div>
      </div>
     
     @yield('content')
    
    <script src="{{URL :: asset('adminpanel/js/vendor.min.js')}}"></script>
    <script src="{{URL :: asset('adminpanel/js/elephant.min.js')}}"></script>
    <script src="{{URL :: asset('adminpanel/js/application.min.js')}}"></script>
    <script src="{{URL :: asset('adminpanel/js/demo.min.js')}}"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-83990101-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>