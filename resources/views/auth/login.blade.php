<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mantenimiento</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    {!! Html::style('plugins/bootstrap/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    {!! HTML::style('plugins/fontawesome/font-awesome.min.css') !!}
    <!-- Ionicons -->
    {!! Html::style('plugins/ionicons/ionicons.min.css') !!}
    <!-- Theme style -->
    {!! Html::style('plugins/AdminLTE/AdminLTE.min.css') !!}
    {!! Html::style('plugins/AdminLTE/_all-skins.min.css') !!}
    <!-- iCheck -->
    {!! Html::style('plugins/AdminLTE/skinsquare_all.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a>
            <b>Mantenimiento</b>
        </a>
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">INICIAR SESION</p>

        <form method="post" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <div class="form-group has-feedback {{ $errors->has('ci') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="ci" value="{{ old('ci') }}" placeholder="CEDULA DE IDENTIDAD (C.I.)">
                <span class="fa fa-newspaper-o form-control-feedback"></span>
                @if ($errors->has('ci'))
                    <span class="help-block">
                    <strong>{{ $errors->first('ci') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="CONTRASEÑA" name="password">
                <span class="fa fa-key form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        
                    </div>
                </div>
                <!-- /.col -->
                <div class="form-control">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">INICIAR SESION</button>
                    
                </div><br>
                <div class="form-control">
                    <a href="{!! route('register') !!}" class="btn btn-primary btn-block btn-flat">REGISTRARSE</a>
                </div>
                
                <!-- /.col -->
            </div>
        </form>

        

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="{{ asset('plugins/jQuery/jquery-1.12.4.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('plugins/AdminLTE/adminlte.min.js') }}"></script>
    <!-- icheck -->
<script src="{{ asset('plugins/icheck/icheck.min.js') }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
