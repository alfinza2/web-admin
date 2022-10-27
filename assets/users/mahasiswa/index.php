<?php
session_start();
include "../../control/connect.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<title>IDNS UNIVERSITY</title>
<link rel="shortcut icon" type=image/icon href=../../images/favicon.png>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name=viewport>
<link rel=stylesheet href=../../setting/bootstrap/bootstrap.css>
<link rel=stylesheet href=../../setting/fa/font-awesome.css>
<link rel=stylesheet href=../../setting/plugins/datatables/dataTables.bootstrap.css>
<link rel=stylesheet href=../../setting/AdminLTE.css>
<link rel=stylesheet href=../../setting/_all-skins.css>
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class=wrapper>
<?php
        include "content_header.php";  
       ?>
<aside class=main-sidebar>
<section class=sidebar>
<div class=user-panel>
<div class="pull-left image">
<p></p>
</div>
</div>
<ul class=sidebar-menu>
<li class=header><h4><b><center>Menu Panel</center></b></h4></li>
<li class=active><a href=index.php><i class="fa fa-home"></i><span>Dashboard</span></a></li>
<li><a href=jadwal.php><i class="fa fa-calendar"></i><span>Jadwal</span></a></li>
<li><a href=nilai.php><i class="fa fa-book"></i><span>Nilai</span></a></li>
<li><a href=about.php><i class="fa fa-info-circle"></i><span>Tentang Aplikasi</span></a></li>
</ul>
</section>
</aside>
<div class=content-wrapper>
<section class=content-header>
<h1>
Dashboard
</h1>
<ol class=breadcrumb>
<li><i class="fa fa-home"></i> Dashboard</li>
</ol>
</section>
<section class=content>
<div class=row>
<div class=col-xs-12>
<div class=box>
<div class=box-header>
<h1><center><b>IDNS UNIVERSITY</b></center></h1>
<center><img src=../../images/IDNS.jpg width=225 height=225 /></center>
<center><h2><b>IDNS Developer Copyright &copy; <?php echo date ('Y') ?></b></h2></center>
<center><h4><b>Made with <strong><i class="fa fa-code"></i></strong> and <i class="fa fa-heart"></i> by FrontEnd Dev of IDNS UNIVERSITY</b></h4></center>
</div>
<div class=box-body>
</div>
</div>
</div>
</div>
</section>
</div>
<?php
    include "content_footer.php";
  ?>
</div>
<script src=../../setting/plugins/jQuery/jQuery-2.1.4.js></script>
<script src=../../setting/bootstrap/bootstrap.js></script>
<script src=../../setting/plugins/datatables/jquery.dataTables.js></script>
<script src=../../setting/plugins/datatables/dataTables.bootstrap.js></script>
<script src=../../setting/plugins/slimScroll/jquery.slimscroll.js></script>
<script src=../../setting/plugins/fastclick/fastclick.js></script>
<script src=../../setting/app.js></script>
</body>
</html>