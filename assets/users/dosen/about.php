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
<?php
    include "bundle_css.php";
  ?>
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class=wrapper>
<?php
        include 'content_header.php';
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
<li><a href=index.php><i class="fa fa-home"></i><span>Dashboard</span></a></li>
<li><a href=jadwal.php><i class="fa fa-calendar"></i><span>Jadwal</span></a></li>
<li><a href=nilai.php><i class="fa fa-book"></i><span>Nilai Mahasiswa</span></a></li>
<li class=active><a href=about.php><i class="fa fa-info-circle"></i><span>Tentang Aplikasi</span></a></li>
</ul>
</section>
</aside>
<div class=content-wrapper>
<section class=content-header>
<h1>
Tentang Aplikasi
</h1>
<ol class=breadcrumb>
<li><i class="fa fa-info-circle"></i> Tentang Aplikasi</li>
</ol>
</section>
<section class=content>
<div class=row>
<div class=col-xs-12>
<div class=box>
<div class=box-header>
<h1><center><b>THIS WEB MADE BY</b></center></h1>
<center><img src=../../images/hilmi.jpg width=225 height=225 /></center>
<center><h2><b>FrontEnd Dev of IDNS &copy; <?php echo date ('Y') ?></b></h2></center>
<center><h4><b>Made with <strong><i class="fa fa-code"></i></strong> and <i class="fa fa-heart"></i> by Hilmi Afifi Al-Atsari in <a href=../../linked/map/map.php>Klaten, Central Java Indonesia</a></b></h4></center>
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
<?php
    include "bundle_script.php";
  ?>
</body>
</html>