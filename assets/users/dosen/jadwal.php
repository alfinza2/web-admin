<?php
session_start();
include "../../control/connect.php";
include "auth_user.php";
$daftarhari[] = "Senin";
$daftarhari[] = "Selasa";
$daftarhari[] = "Rabu";
$daftarhari[] = "Kamis";
$daftarhari[] = "Jumat";
$daftarhari[] = "Sabtu";
$daftarhari[] = "Minggu";
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
<li class=active><a href=jadwal.php><i class="fa fa-calendar"></i><span>Jadwal</span></a></li>
<li><a href=nilai.php><i class="fa fa-book"></i><span>Nilai Mahasiswa</span></a></li>
<li><a href=about.php><i class="fa fa-info-circle"></i><span>Tentang Aplikasi</span></a></li>
</ul>
</section>
</aside>
<div class=content-wrapper>
<section class=content-header>
<h1>
Jadwal
</h1>
<ol class=breadcrumb>
<li><i class="fa fa-calendar"></i> Jadwal</li>
</ol>
</section>
<section class=content>
<div class=row>
<div class=col-xs-12>
<div class=box>
<div class=box-header>
</div>
<div class=box-body>
<table id=data class="table table-bordered table-striped table-scalable">
<?php
							include "dt_jadwal.php";
						?>
</table>
</div>
</div>
</div>
</div>
</section>
<div id=ModalAdd class="modal fade" tabindex=-1 role=dialog>
<div class=modal-dialog>
<div class=modal-content>
<div class=modal-header>
<button type=button class=close data-dismiss=modal aria-label=Close><span aria-hidden=true>&times;</span></button>
<h4 class=modal-title>Tambah Jadwal</h4>
</div>
<div class=modal-body>
<form action=jadwal_add.php name=modal_popup enctype=multipart/form-data method=post>
<div class=form-group>
<label>Dosen</label>
<div class=input-group>
<div class=input-group-addon>
<i class="fa fa-user"></i>
</div>
<select name=NIP_Jadwal class=form-control>
<?php
											
											$querydosen = mysqli_query($konek, "SELECT * FROM dosen");
											if ($querydosen == false){
												die ("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while ($dosen = mysqli_fetch_array($querydosen)){
												echo "<option value='$dosen[NIP]'>$dosen[Nama_Dosen]</option>";
											}
										?>
</select>
</div>
</div>
<div class=form-group>
<label>Matakuliah</label>
<div class=input-group>
<div class=input-group-addon>
<i class="fa fa-book"></i>
</div>
<select name=Kode_Matakuliah_Jadwal class=form-control>
<?php
												
												$querymtk = mysqli_query ($konek, "SELECT * FROM matakuliah");
												if ($querymtk == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($mtk = mysqli_fetch_array($querymtk)){
													echo "<option value='$mtk[Kode_Matakuliah]'>$mtk[Nama_Matakuliah]</option>";
												}
											?>
</select>
</div>
</div>
<div class=form-group>
<label>Ruangan</label>
<div class=input-group>
<div class=input-group-addon>
<i class="fa fa-columns"></i>
</div>
<select name=Kode_Ruangan_Jadwal class=form-control>
<?php
												
												$queryruang = mysqli_query($konek, "SELECT * FROM ruangan");
												if($queryruang == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($ruang = mysqli_fetch_array($queryruang)){
													echo "<option value='$ruang[Kode_Ruangan]'>$ruang[Nama_Ruangan]</option>";
												}
											?>
</select>
</div>
</div>
<div class=form-group>
<label>Jurusan</label>
<div class=input-group>
<div class=input-group-addon>
<i class="fa fa-university"></i>
</div>
<select name=Kode_Jurusan_Jadwal class=form-control>
<?php
												
												$queryjurusan = mysqli_query($konek, "SELECT * FROM jurusan");
												if($queryjurusan == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($jurusan = mysqli_fetch_array($queryjurusan)){
													echo "<option value='$jurusan[Kode_Jurusan]'>$jurusan[Nama_Jurusan]</option>";
												}
											?>
</select>
</div>
</div>
<div class=form-group>
<label>Hari</label>
<div class=input-group>
<div class=input-group-addon>
<i class="fa fa-calendar"></i>
</div>
<select name=Hari class=form-control>
<?php
											for($hari=0; $hari<count($daftarhari); $hari++)
											{
												echo "<option value='$daftarhari[$hari]'>$daftarhari[$hari]</option>";
											}
										?>
</select>
</div>
</div>
<div class=form-group>
<label>Jam Mulai</label>
<div class=input-group>
<div class=input-group-addon>
<i class="fa fa-clock-o"></i>
</div>
<input id=Jam_Mulai name=Jam_Mulai type=text class=form-control placeholder="Jam Mulai">
</div>
</div>
<div class=form-group>
<label>Jam Selesai</label>
<div class=input-group>
<div class=input-group-addon>
<i class="fa fa-clock-o"></i>
</div>
<input id=Jam_Selesai name=Jam_Selesai type=text class=form-control placeholder="Jam Selesai">
</div>
</div>
<div class=modal-footer>
<button class="btn btn-success" type=submit>
Add
</button>
<button type=reset class="btn btn-danger" data-dismiss=modal aria-hidden=true>
Cancel
</button>
</div>
</form>
</div>
</div>
</div>
</div>
<div id=ModalEditJadwal class="modal fade" tabindex=-1 role=dialog></div>
<div class="modal fade" id=modal_delete>
<div class=modal-dialog>
<div class=modal-content style=margin-top:100px>
<div class=modal-header>
<button type=button class=close data-dismiss=modal aria-hidden=true>&times;</button>
<h4 class=modal-title style=text-align:center>Are you sure to delete this information ?</h4>
</div>
<div class=modal-footer style=margin:0;border-top:0;text-align:center>
<a href=# class="btn btn-danger" id=delete_link>Delete</a>
<button type=button class="btn btn-success" data-dismiss=modal>Cancel</button>
</div>
</div>
</div>
</div>
</div>
<?php
		include	"content_footer.php";
	?>
</div>
<?php
		include "bundle_script.php";
	?>
</body>
</html>