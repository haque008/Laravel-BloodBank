<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{ url('Icon.png') }}">
    <title>@yield('title')</title>


    <!-- Plugins and scripts required by this views -->

    <!-- Icons -->
    <link href="{{ url('assets/asset/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/asset/css/simple-line-icons.css') }}" rel="stylesheet">

    <!-- Premium Icons -->
    <link href="{{ url('assets/asset/css/glyphicons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/asset/css/glyphicons-filetypes.css') }}" rel="stylesheet">
    <link href="{{ url('assets/asset/css/glyphicons-social.css') }}" rel="stylesheet">
    <link href="{{ url('assets/asset/css/sweetalert2.min.css') }}" rel="stylesheet">


    <!-- Main styles for this application -->
    <link href="{{ url('assets/asset/css/style.css') }}" rel="stylesheet">

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden" >
<header class="app-header navbar" style="background-color:rgb(0,188,212); color:red;">
    <button class="navbar-toggler mobile-sidebar-toggler hidden-lg-up" type="button">?</button>
    <a class="navbar-brand" href="" style="background-color:rgb(38,50,56);"><h4 style="text-align: center;color: red ; ">Blood Bank </h4></a>
    <ul class="nav navbar-nav hidden-md-down">
        <li class="nav-item">
            <a class="nav-link navbar-toggler sidebar-toggler" href="#" style="color: #f1f2f1;">☰</a>
        </li>

        <li class="nav-item px-1">
            <a class="nav-link" href="{{ route('form.show',['id'=> Auth::user()->id])}}" style="color:  #fff8c5; font-size: 15px;">My DashBoard</a>
        </li>

        <li class="nav-item px-1">
            <a class="nav-link" href="" style="color:  #fff8c5; font-size: 15px;">Current Time</a>
        </li>

        <li class="nav-item px-1">
            <a class="nav-link" href="" style="color:  #fff8c5; font-size: 15px;">Health Tips</a>
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span  class="hidden-md-down" style="margin-left: 400px; background-color:red; font-weight: bold;"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">

                <div class="dropdown-header text-center">
                    <a href="#" class="dropdown-toggle" style="color:black;" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->firstName }} <span class="caret"></span>
                    </a>
                </div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();""><i class="fa fa-lock"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>

    </ul>

</header>


<div class="app-body">
    <div class="sidebar" style="">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('form.create')}}">
                        <i class="fa fa-user-plus" style="color: red;" aria-hidden="true"></i><h6 style="color: #fff8c5;">Info</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('request')}}">
                        <i class="fa fa-heartbeat" style="color: red; aria-hidden="true"></i><h6 style="color: #fff8c5;">Blood Request</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=" {{route('form.index')}}">
                        <i class="fa fa-users" style="color: red; aria-hidden="true"> </i><h6 style="color: #fff8c5;">Donor List</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fa fa-file-text-o" style="color: red; aria-hidden="true"></i><h6 style="color: #fff8c5;">Current Donor</h6>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Main content -->
    <main class="main" style="background-color: rgb(189,189,189);" >
        <div class="container-fluid pt-2">

            <div class="animated fadeIn">

                @yield('content')


            </div>

        </div>
        <!-- /.conainer-fluid -->
    </main>

</div>

<footer class="app-footer" style="background-color:black; color: #f1f2f1; text-align: center; height: 15px;">
    <span>Follow us on</span>
    <a style="color: black;" href="https://www.facebook.com/ekramul.29" target="_blank"><button type="button" class="btn btn-facebook icon" style="margin-top: 4px"></button></a>
    <a style="color: black;" href="https://plus.google.com/u/0/115503360738141354343" target="_blank"></a><button type="button" class="btn btn-google-plus icon" style="margin-top: 4px">
        <span>Google+</span>
    </button>

</footer>

<!-- Bootstrap and necessary plugins -->
<script src="{{ url('assets/asset/js/libs/jquery.min.js') }}"></script>
<script src="{{ url('assets/asset/js/libs/tether.min.js') }}"></script>
<script src="{{ url('assets/asset/js/libs/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/asset/js/libs/pace.min.js') }}"></script>


<!-- Plugins and scripts required by all views -->
<script src="{{ url('assets/asset/js/libs/Chart.min.js') }}"></script>


<!-- GenesisUI main scripts -->

<script src="{{ url('assets/asset/js/app.js') }}"></script>

<script src="{{ url('assets/asset/js/libs/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/asset/js/libs/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('assets/asset/js/sweetalert2.min.js') }}"></script>

<!-- Custom scripts required by this view -->
<script src="{{ url('assets/asset/js/views/tables.js') }}"></script>

@yield('script')

</body>

</html>

