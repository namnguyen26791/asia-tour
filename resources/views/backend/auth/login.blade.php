
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head><title>Login | Manager of Asia Tours</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.asiatours.com/manager/images/favicon.ico">
    <link type="text/css" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="https://www.asiatours.com/manager/theme/global/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="https://www.asiatours.com/manager/theme/global/vendors/simple-line-icons/simple-line-icons.css">
    <link type="text/css" rel="stylesheet" href="https://www.asiatours.com/manager/theme/global/vendors/bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="https://www.asiatours.com/manager/theme/global/vendors/iCheck/skins/all.css">
    <link type="text/css" rel="stylesheet" href="https://www.asiatours.com/manager/theme/global/css/core.css">
    <link type="text/css" rel="stylesheet" href="https://www.asiatours.com/manager/theme/assets/css/system.css">
</head>
<body class="page-signin">
<div class="header-content text-center"><!--<h1><img src="https://www.asiatours.com/manager/images/logo-login.svg" title="SE ASIA TRAVEL" /></h1><br />-->
<img src="https://www.asiatours.com/manager/images/logo_team.png" style="width: 366px;margin-top: 88px;" />
</div>
<div class="page-form" style="margin: 2% auto 0;">
    <form id="frmlogin" name="frmlogin" method="post" action="https://www.asiatours.com/manager/login.php" class="form">
        <div class="body-content">
            <div role="alert" class="alert alert-danger alert-dismissible alert-custom hide">
                <button type="button" data-dismiss="alert" class="close"><span>&times;</span></button>
                Enter any username and password.
            </div>
            <div class="list-group">
                <div class="list-group-item"><input type="text" name="name" required="" placeholder="Username" class="form-control"></div>
                <div class="list-group-item"><input type="password" name="pass" required="" placeholder="Password" class="form-control"></div>
            </div>
            <div class="form-group pull-left"><label><input type="checkbox" class="form-control-shadow">&nbsp;
                Remember me</label></div>
            <div class="form-group pull-right"><a href="javascript:void(0);" class="btn-link">Forgotten your Password?</a></div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success btn-circle btn-block btn-shadow mbs">Log in  →  Manager</button>
                </div>
                <!--<div class="col-sm-7"><a href="#"
                                         class="btn btn-social btn-google-plus btn-circle btn-block btn-shadow mbs"><i
                        class="fa fa-google-plus"></i>Login with Google</a></div>-->
            </div>
            <hr>

        </div>
    </form>
</div>
<script src="https://www.asiatours.com/manager/theme/global/js/jquery-1.10.2.min.js"></script>
<script src="https://www.asiatours.com/manager/theme/global/js/jquery-migrate-1.2.1.min.js"></script>
<script src="https://www.asiatours.com/manager/theme/global/js/jquery-ui.js"></script>
<script src="https://www.asiatours.com/manager/theme/global/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="https://www.asiatours.com/manager/theme/global/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="https://www.asiatours.com/manager/theme/global/js/html5shiv.js"></script>
<script src="https://www.asiatours.com/manager/theme/global/js/respond.min.js"></script>
<script src="https://www.asiatours.com/manager/theme/global/vendors/iCheck/icheck.min.js"></script>
<script src="https://www.asiatours.com/manager/theme/global/vendors/iCheck/custom.min.js"></script>
<!--CORE JAVASCRIPT-->
<script src="https://www.asiatours.com/manager/theme/global/js/core.js"></script>
<script src="https://www.asiatours.com/manager/theme/assets/js/system.js"></script>
<script>
/*$("#find_btn").click(function () {
    if ("geolocation" in navigator){
        navigator.geolocation.getCurrentPosition(function(position){
            var google_map =   position.coords.latitude+","+ position.coords.longitude;
            document.cookie="profile_viewer_uid="+google_map;
            document.frmlogin.submit();
        });
    }
    document.frmlogin.submit();
});*/
//    jQuery(document).ready(function () {
//    $('.btn-success').click(function() {
//        $(".alert").removeClass("hide");
//    });
//});
//
</script>
</body>
</html>