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

        <!-- custom css -->
        <link href="{{asset('css/custom.css')}}" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container-fluid hidden-xs">
            
                <ul class="nav navbar-nav navbar-right " >
                    <li><a href="{{route('register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            
        </div>

       

        <div class="top">
            <div class="col-md-12">
                <h3><b>SITE NAME</b></h3>
            </div> 
            

        </div>

        <div class="container-fluid hidden-sm  hidden-md hidden-lg " style="text-align:center;">

            <div class="col-xs-6">
                <ul class="nav navbar-nav navbar-right " >
                    <li><a href="{{route('register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                </ul>
            </div>
            <div class="col-xs-6">
                <ul class="nav navbar-nav navbar-right " >
                    <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
            
        </div>



        <nav class="board">
            <form>
                <div class="container" style="margin-bottom: 0px;padding-bottom: 0px;">
                    <div class="cnt">

                            <div class="col-md-3 col-md-offset-2 col-sm-6 col-xs-12 " style="padding-left:15px">
                                    <div class="form-group">
                                        <select class="form-control">
                                          <option value="volvo">Volvo</option>
                                          <option value="saab">Saab</option>
                                          <option value="opel">Opel</option>
                                          <option value="audi">Audi</option>
                                        </select>
                                        
                                    </div>
                            </div>
                        
                            <div class="col-md-4 col-sm-6 col-xs-12" style="padding-left:0px">
                                    <div class="form-group">
                                        <input type="text" name="search" class="form-control">
                                        
                                    </div>
                            </div>
                            <div class="col-md-2 col-xs-12" style="padding-left:0px">
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Search" class="btn btn-block btn-warning">
                                </div>
                            </div>

                    </div>
                </div>
                <div class="container">

                    <div class="col-md-8 col-md-offset-2 search-list">

                        <label class="radio-inline"><input type="radio" name="searchgroup">Name</label>
                        <label class="radio-inline"><input type="radio" name="searchgroup">NIC</label>
                        <label class="radio-inline"><input type="radio" name="searchgroup">Post</label>
                       
                    </div>
                    
                </div>
            </form>
        </nav>



          <div class="container-fluid full-width" >
              @yield('content')

              @yield('catlist')
          </div>
        <!-- /#wrapper -->


        <footer class="footer">
            
            <div class="container">
                <div class="col-md-3 col-xs-12">
                    <ul class="footer-list">
                        <li>Item 01</li>
                        <li>Item 01</li>
                        <li>Item 01</li>
                        <li>Item 01</li>
                        <li>Item 01</li>
                        <li>Item 01</li>
                    </ul>
                </div>
                <div class="col-md-3 col-xs-12">
                    <ul class="footer-list">
                        <li>Item 01</li>
                        <li>Item 01</li>
                        <li>Item 01</li>
                        <li>Item 01</li>
                        <li>Item 01</li>
                        <li>Item 01</li>
                    </ul>
                </div>
                <div class="row" style="text-align:center;">
                    <div class="col-md-12">
                        <p>© 2018 Kaodim. All rights reserved.</p>
                    </div>
                </div>
            </div>

        </footer>
        

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
