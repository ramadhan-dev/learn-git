<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Administrator | </title>

  <!-- Bootstrap core CSS -->

  <link href="{{ URL::to('css/bootstrap.min.css')}}" rel="stylesheet">

  <link href="{{ URL::to('fonts/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ URL::to('css/animate.min.css')}}" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="{{ URL::to('css/custom.css')}}" rel="stylesheet">
  <link href="{{ URL::to('css/icheck/flat/green.css')}}" rel="stylesheet">


  <script src="{{('js/jquery.min.js')}}"></script>
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
  </style>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div  id="login" class="animate form">
        <section class="login_content">
          <form class="form-horizontal" role="form" method="POST" action="{{route('login')}}">
            {{ csrf_field() }}
            <h1>Login Form</h1>
              <div class="form-group has-feedback{{ $errors->has('username') ? ' has-error' : '' }}">
                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>         @if ($errors->has('username'))
                <span class="help-block">
                  <strong>{{ $errors->first('username') }}</strong>
                </span>
                @endif
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="row">
                <div class="col-xs-8">
                  <div class="checkbox icheck">
                    <label>
                      <input type="checkbox"> Remember
                    </label>
                  </div>
                </div>
            <div>
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
        </form>
      </section>
    </div>
    </div>
    </div>

</body>

</html>

