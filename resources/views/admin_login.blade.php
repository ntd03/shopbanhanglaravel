<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trang quản lí admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/bootstrap.min.css') }}" >
    <!-- //bootstrap-css -->
    <!-- Thêm SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <!-- Thêm SweetAlert JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <!-- Custom CSS -->
    <link href="{{ asset('public/backend/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('public/backend/css/style-responsive.css') }}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/font.css') }}" type="text/css"/>
    <link href="{{ asset('public/backend/css/font-awesome.css') }}" rel="stylesheet"> 
    <!-- //font-awesome icons -->
    <script src="{{ asset('backend/js/jquery2.0.3.min.js') }}"></script>
</head>
<body>
<div class="log-w3">
    <div class="w3layouts-main">
        <h2>Đăng nhập</h2>
        <?php
            use Illuminate\Support\Facades\Session;
            $message = Session::get('message');
            if ($message) {
                echo "<script type='text/javascript'>
                    swal({
                        title: 'Opps',
                        text: '$message',
                        type: 'error',
                        confirmButtonText: 'Ok, đã hiểu!',
                    });
                </script>";
                Session::put('message', null);
            }
        ?>
        <form action="{{URL::to('admin-dashboard') }}" method="post">
            {{ csrf_field() }}
            <input type="text" class="ggg" name="admin_Email" placeholder="Nhập email" required="">
            <input type="password" class="ggg" name="admin_Password" placeholder="Nhập passwork" required="">
            <span><input type="checkbox" />Nhớ đăng nhập </span>
            <h6><a href="#">Quên mật khẩu?</a></h6>
            <div class="clearfix"></div>
            <input type="submit" value="Sign In" name="login">
        </form>
    </div>
</div>
<script src="{{ asset('public/backend/js/bootstrap.js') }}"></script>
<script src="{{ asset('public/backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('public/backend/js/scripts.js') }}"></script>
<script src="{{ asset('public/backend/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('public/backend/js/jquery.nicescroll.js') }}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="public/backend/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{ asset('public/backend/js/jquery.scrollTo.js') }}"></script>
</body>
</html>
