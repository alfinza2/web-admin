<?php
include "../../control/connect.php";
$Kode_Jenjang	= $_GET["Kode_Jenjang"];
$queryjenjang = mysqli_query($konek, "SELECT * FROM jenjang WHERE Kode_Jenjang='$Kode_Jenjang'");
if($queryjenjang == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($jenjang = mysqli_fetch_array($queryjenjang)){
?>
<script src="../../setting/plugins/daterangepicker/moment.js"></script>
<script src="../../setting/plugins/daterangepicker/daterangepicker.js"></script>
<script>$(function(){$("#Tanggal_Lahir2").daterangepicker({singleDatePicker:true,showDropdowns:true,format:"YYYY-MM-DD"})});</script>
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">Edit Jenjang</h4>
</div>
<div class="modal-body">
<form action="jenjang_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
<div class="form-group">
<label>Kode Jenjang</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-graduation-cap"></i>
</div>
<input name="Kode_Jenjang" type="text" class="form-control" value="<?php echo $jenjang["Kode_Jenjang"]; ?>" readonly />
</div>
</div>
<div class="form-group">
<label>Jenjang</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-graduation-cap"></i>
</div>
<input name="Nama_Jenjang" type="text" class="form-control" value="<?php echo $jenjang["Nama_Jenjang"]; ?>"/>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-success" type="submit">
Save
</button>
<button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
Cancel
</button>
</div>
</form>
</div>
</div>
</div>
<?php
			}
?>