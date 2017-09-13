
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Gentallela Alela! | </title>

  <!-- Bootstrap core CSS -->

  <link href="{{URL::to('css/bootstrap.min.css')}}" rel="stylesheet">

  <link href="{{URL::to('fonts/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{URL::to('css/animate.min.css')}}" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="{{URL::to('css/custom.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{URL::to('css/maps/jquery-jvectormap-2.0.3.css')}}" />
  <link href="{{URL::to('css/icheck/flat/green.css')}}" rel="stylesheet" />
  <link href="{{URL::to('css/floatexamples.css')}}" rel="stylesheet" type="text/css" />

  <script src="{{URL::to('js/jquery.min.js')}}"></script>
  <script src="{{URL::to('js/nprogress.js')}}"></script>
  @yield('style')

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
   <style>
     .btn{
      border-radius: 0;
     }
     .btn-primary{
      background-color: transparent;
      color:#00897B;
      border:1px solid #00897B;
     }
     .btn-primary:hover{
      background-color: #00897B;
     }
     .btn-info{
      background-color: transparent;
      border:1px solid #26C6DA;
      color:#26C6DA;
     }
     .btn-info:hover{
      background-color: #26C6DA;
     }
     .btn-danger{
      background-color: transparent;
      color: #FF1744;
      border:1px solid #FF1744;
     }
     .btn-danger:hover{
      background-color: #FF1744;
     }
     .btn-warning{
      background-color: transparent;
      color: #FF3D00;
      border:1px solid #FF3D00;
     }
     .btn-warning:hover{
      background-color: #FF3D00;
     }
   </style>
