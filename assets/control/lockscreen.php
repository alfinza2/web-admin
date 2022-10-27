<?php
session_start();
include "connect.php";
if($_SESSION["Login"] != true)
{
  header("Location: ../linked/404.php");
  exit();
}
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
      $Err = "Username atau Password salah";
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
// include "koneksi.php";
// include "auth_user.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<title>IDNS UNIVERSITY</title>
<link rel="shortcut icon" type=image/icon href=../images/favicon.png>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name=viewport>
<link rel=stylesheet href=../setting/bootstrap/bootstrap.css>
<link rel=stylesheet href=../setting/fa/font-awesome.css>
<link rel=stylesheet href=../setting/plugins/datatables/dataTables.bootstrap.css>
<link rel=stylesheet href=../setting/AdminLTE.css>
<link rel=stylesheet href=../setting/_all-skins.css>
</head>
<body class="hold-transition lockscreen">
<div class=lockscreen-wrapper>
<div class=lockscreen-logo>
<b>IDNS UNIVERSITY</b>
</div>
<div class=lockscreen-name style=text-transform:uppercase><?php echo $_SESSION["Username"] ?></div>
<div class=lockscreen-item>
<div class=lockscreen-image>
<img src=../images/IDNS.jpg alt=Foto>
</div>
<form class=lockscreen-credentials action=control_lockscreen.php method=post>
<div class=input-group>
<input name=Password type=password class=form-control placeholder=Password>
<div class=input-group-btn>
<button class=btn><i class="fa fa-arrow-right text-muted"></i></button>
</div>
</div>
</form>
</div>
<div class="help-block text-center">
Masukkan kembali Password Anda
</div>
<div class=text-center>
<a href=logout.php id=logout>Login dengan user berbeda</a>
</div>
<center><font style=color:red><?php echo $Err ?></font></center>
<center><font style=color:green><?php echo $Notif ?></font></center>
<div class="lockscreen-footer text-center">
<strong>Copyright &copy; <?php echo date("Y") ?> IDNS (I DO NOT SLEEP) <a href=http://hilmi-afifi.github.io/demo>Hilmi Afifi Al-Atsari</a></strong>
</div>
</div>
<script src=../setting/plugins/jQuery/jQuery-2.1.4.js></script>
<script src=../setting/bootstrap/bootstrap.js></script>
<script src=../setting/plugins/datatables/jquery.dataTables.js></script>
<script src=../setting/plugins/datatables/dataTables.bootstrap.js></script>
<script src=../setting/plugins/slimScroll/jquery.slimscroll.js></script>
<script src=../setting/plugins/fastclick/fastclick.js></script>
<script src=../setting/app.js></script>
</body>
</html>