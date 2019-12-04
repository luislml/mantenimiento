<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>mantenimiento</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.7 -->
    {!! Html::style('plugins/bootstrap/bootstrap.min.css') !!}
    {!! Html::style('plugins/bootstrap/bootstrap-toggle.min.css') !!}
    <!-- Font Awesome  -->
    {!! HTML::style('plugins/fontawesome/font-awesome.min.css') !!}
  
    <!-- Theme style -->
    {!! Html::style('plugins/AdminLTE/AdminLTE.min.css') !!}
    {!! Html::style('plugins/AdminLTE/_all-skins.min.css') !!}
    <!-- iCheck -->
    {!! Html::style('plugins/AdminLTE/skinsquare_all.css') !!}
    {!! Html::style('plugins/select2/select2.min.css') !!}
    <!-- Ionicons -->
    {!! Html::style('plugins/ionicons/ionicons.min.css') !!}
    {!! Html::style('plugins/ionicons/bootstrap-datetimepicker.min.css') !!}
    <!-- data tables -->    
    {!! Html::style('plugins/dataTables/dataTables.bootstrap.min.css') !!}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- fullcalendar -->
    {!! Html::style('plugins/fullcalendar/fullcalendar.min.css') !!}
    {!! Html::style('plugins/jQuery/jquery-ui.css') !!}
    {!! Html::style('plugins/daterangepicker/daterangepicker-bs3.css') !!}

    <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">-->

    @yield('css')
</head>

<body class="skin-blue sidebar-mini">
@if (!Auth::guest())
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <div class="pull-left image"><img width="45" src={{asset('img/tuerca.png')}}
                                     class="img-circle" alt="User Image"/>
                                      <b>Mantenimiento</b>
                                  </div>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src={{asset('img/LogoSedes2019-Oficial-peq.png')}}
                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{!! Auth::user()->nombre !!} {!! Auth::user()->apellido !!}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src={{asset('img/LogoSedes2019-Oficial-peq.png')}}
                                         class="img-circle" alt="User Image"/>
                                    <p>
                                        {!! Auth::user()->nombre !!} {!! Auth::user()->apellido !!}
                                        <small>Miembro desde {!! Auth::user()->created_at->format('M. Y') !!}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
            
            @if(auth()->user()->rol == '')
                <li>
                    <h1 style="max-height: 100px;text-align: center">CUENTA INACTIVA</h1>
                </li>
            @endif
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2019 <a href="#">S.E.D.E.S.</a></strong> Todos los derechos reservados.
        </footer>

    </div>
@else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{!! url('/') !!}">
                    InfyOm Generator
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{!! url('/home') !!}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{!! url('/login') !!}">Login</a></li>
                    <li><a href="{!! url('/register') !!}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif
    
    <!-- jQuery-->
    <script src="{{ asset('plugins/jQuery/jquery-1.12.4.js') }}"></script>
    <script src="{{ asset('plugins/jQuery/jquery-ui.js') }}"></script>
    <!-- moment -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <!-- full calendar -->
    <script src="{{ asset('plugins/fullcalendar/fullcalendar.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap-toggle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('plugins/AdminLTE/adminlte.min.js') }}"></script>
    <!-- icheck -->
    <script src="{{ asset('plugins/icheck/icheck.min.js') }}"></script>
    <!-- select2 -->
    <script src="{{ asset('plugins/select2/select2.min.js') }}"></script>
    <!-- data tables -->
    <script src="{{ asset('plugins/dataTables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/dataTables/dataTables.bootstrap.min.js') }}"></script>
    <!-- jQuery mask-->
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    @yield('scripts')
</body>
</html> 