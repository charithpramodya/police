<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{asset('css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{asset('css/timeline.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('css/startmin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{asset('css/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Startmin</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <!--user name-->
                            <i class="fa fa-user fa-fw"></i>ABC<b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">

                            <!--
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                                    -->

                            <li class="divider"></li>
                            <li><a href="{{route('admin-logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="index.html" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Users<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{route('admin-show-cur-users')}}">Current Users</a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin-show-users')}}"">New Users</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
    
                            <li>
                                <a href="#"><i class="fa fa-male fa-fw"></i>Workers<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    
                                    <li>
                                        <a href="{{route('admin-show-data')}}">Current Workers</a>
                                    </li>

                                    <li>
                                        <a href="{{route('admin-add-data')}}">Add Worker</a>
                                    </li>
                                    <li>
                                        <a href="buttons.html">Update Worker</a>
                                    </li>
                                    <li>
                                        <a href="notifications.html">Worker Type</a>
                                    </li>
                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i>Extra Details<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Provinces</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="blank.html">Blank Page</a>
                                    </li>
                                    <li>
                                        <a href="login.html">Login Page</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-1">
                        <button  type="button" class="btn btn-default btn-lg page-header ">
                            <span class="glyphicon glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        </button>
                    </div>

                    <div class="col-lg-11">
                        <h1 class="page-header">@yield('topic')</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!--content-->
                    @yield('content')
                <!-- /.row -->
               
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->



        

        <!-- jQuery -->
        <script src="{{asset('js/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{asset('js/metisMenu.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
      

        <!-- Custom Theme JavaScript -->
        <script src="{{asset('js/startmin.js')}}"></script>

        <!--application js file -->
        <script src="{{asset('js/custom.js')}}"></script>

    </body>
</html>
