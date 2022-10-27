<?php
session_start();
include "assets/control/connect.php";

// Notif Error
$Err = "";
if(isset ($_GET ["Err"]) && !empty ($_GET ["Err"])){
  switch ($_GET ["Err"]){
    case 1:
      $Err = "Username dan Password Kosong";
    break;
    case 2:
      $Err = "Username Kosong";
    break;
    case 3:
      $Err = "Password Kosong";
    break;
    case 4:
      $Err = "Password salah";
    break;
    case 5:
      $Err = "Username dan Password Salah";
    break;
    case 6:
      $Err = "Maaf, Terjadi Kesalahan";
    break;
  }
}

// Notif
$Notif = "";
if(isset ($_GET["Notif"]) && !empty ($_GET["Notif"])){
  switch($_GET["Notif"]){
    case 1:
      $Notif = "User berhasil dibuat, silahkan Login";
    break;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<title>IDNS UNIVERSITY</title>
<link rel="shortcut icon" type=image/icon href=assets/images/favicon.png>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name=viewport>
<link rel=stylesheet href=assets/setting/bootstrap/bootstrap.css>
<link rel=stylesheet href=assets/setting/main.css>
<link rel=stylesheet href=assets/setting/fa/font-awesome.css>
<link rel=stylesheet href=assets/setting/AdminLTE.css>
<link rel=stylesheet href=assets/setting/plugins/iCheck/square/red.css>
</head>
<body class="hold-transition login-page wrapper">
<div id=wrapper>
<div id=bg></div>
<div id=overlay></div>
<div id=main>
<header id=header>
<div class=login-box>
<div class=login-logo>
<b>IDNS UNIVERSITY</b>
</div>
<div class=login-box-body>
<b><p class=login-box-msg>LOGIN FORM</p></b>
<form action=assets/control/control_user.php method=post>
<div class="form-group has-feedback">
<input type=text name=Username class=form-control placeholder=Username maxlength=30 />
<span class=form-control-feedback><i class="fa fa-user"></i></span>
</div>
<div class="form-group has-feedback">
<input type=password name=Password class=form-control placeholder=Password maxlength=255 />
<span class=form-control-feedback><i class="fa fa-unlock"></i></span>
</div>
<div class=row>
<div class=col-xs-8>
</div>
<div class=col-xs-4>
<button type=submit class="btn btn-primary">Sign In <i class="fa fa-sign-in"></i></button>
</div>
<br>
<center><font style=color:red><?php echo $Err ?></font></center>
<center><font style=color:green><?php echo $Notif ?></font></center>
</br>
</form>
<a href=assets/linked/404.php><i class="fa fa-users"></i> Register </a> ||
<a href=assets/linked/sitemaps/index.html rel=nofollow><i class="fa fa-users"></i> Site Maps</a>
</div>
</div>
</header>
</div>
</div>
<script src=assets/setting/plugins/jQuery/jQuery-2.1.4.js></script>
<script src=assets/setting/bootstrap/bootstrap.js></script>
<script src=assets/setting/plugins/iCheck/icheck.js></script>
<script>window.onload=function(){document.body.className=""};window.ontouchmove=function(){return false};window.onorientationchange=function(){document.body.scrollTop=0};</script>
</body>
</html>