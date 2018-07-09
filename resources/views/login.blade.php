<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng nhập</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .inner-addon {
            position: relative;
        }

        /* style icon */
        .inner-addon .glyphicon {
            position: absolute;
            padding-left: 17px;
            padding-top: 16px;
            pointer-events: none;
        }

        /* align icon */
        .left-addon .glyphicon  { left:  0px;}
        .right-addon .glyphicon { right: 0px;}

        /* add padding  */
        .left-addon input  { padding-left:  30px; }
        .right-addon input { padding-right: 30px; }
        .form {
            position: relative;
            z-index: 1;
            background: #f2f2f2;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .customInput {
            font-family: "Roboto", sans-serif;
            outline: 0;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }
        .form input[type="button"]  {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #3c8dbc;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }
        .password{
            background: #FFFFFF url('dist/img/lock-icon.png') no-repeat 95% center;
        }
    </style>
    <!-- Google Font -->
    <link rel="stylesheet" href="dist/css/font/GoogleFont.css">
</head>
<body class="hold-transition login-page" style="background: #3c8dbc; overflow: hidden;">
<div class="login-box">
    <div class="login-logo">
        <img style="display: inline-block; width: 60px; height: 60px" class="img-responsive" src="dist/img/logo.png" alt="Photo">
    </div>
    <!-- /.login-logo -->
    <div class="form">
        <form class="login-form">
            <div class="inner-addon left-addon">
                <i class="glyphicon glyphicon-user"></i>
                <input type="text" id="username" style="padding-left: 40px;" class="customInput" placeholder="Tài khoản"/>
            </div>
            <div class="inner-addon left-addon">
                <i class="glyphicon glyphicon-lock"></i>
                <input type="password" id="password" style="padding-left: 41px;" class="customInput" placeholder="Mật khẩu"/>
            </div>
            <input type="button" onclick="forward();" value="đăng nhập"/>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
    function forward() {
        var username = document.getElementById('username').value;
        if (username == "abc123@gmail.com") {
            window.location.href = "/home";
        }else if(username == "nv5673@gmail.com"){
            window.location.href = "/home";
        }
        else{
            window.alert('Tên hoặc mật khẩu không đúng');
        }
    }
</script>
</body>
</html>
