<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>HMS | Admin Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    {{--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>--}}
    <link href="../assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/uniform/css/uniform.default.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="../assets/css/pages/css/login2.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="../assets/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/layout2/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="../assets/css/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="/">
        <img src="../assets/img/logo.png" alt="HMS"/>
    </a>
</div>
<!-- END LOGO -->
@yield('content')
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../assets/js/respond.min.js"></script>
<script src="../assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery-migrate.min.js" type="text/javascript"></script>
<script src="../assets/css/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/css/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/js/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/js/metronic.js" type="text/javascript"></script>
<script src="../assets/css/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="../assets/css/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="../assets/css/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>