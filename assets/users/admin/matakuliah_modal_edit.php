<?php
include "../../control/connect.php";
$Kode_Matakuliah	= $_GET["Kode_Matakuliah"];
$querymatakuliah = mysqli_query($konek, "SELECT * FROM matakuliah WHERE Kode_Matakuliah='$Kode_Matakuliah'");
if($querymatakuliah == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($matakuliah = mysqli_fetch_array($querymatakuliah)){
?>
<script src="../../setting/plugins/daterangepicker/moment.js"></script>
<script src="../../setting/plugins/daterangepicker/daterangepicker.js"></script>
<script>$(function(){$("#Tanggal_Lahir2").daterangepicker({singleDatePicker:true,showDropdowns:true,format:"YYYY-MM-DD"})});</script>
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">Edit Matakuliah</h4>
</div>
<div class="modal-body">
<form action="matakuliah_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
<div class="form-group">
<label>Kode Matakuliah</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-book"></i>
</div>
<input name="Kode_Matakuliah" type="text" class="form-control" value="<?php echo $matakuliah["Kode_Matakuliah"]; ?>" readonly />
</div>
</div>
<div class="form-group">
<label>Matakuliah</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-book"></i>
</div>
<input name="Nama_Matakuliah" type="text" class="form-control" value="<?php echo $matakuliah["Nama_Matakuliah"]; ?>"/>
</div>
</div>
<div class="form-group">
<label>SKS</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-book"></i>
</div>
<input name="SKS" type="text" class="form-control" value="<?php echo $matakuliah["SKS"]; ?>"/>
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