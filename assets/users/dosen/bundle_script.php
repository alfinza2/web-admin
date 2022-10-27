<script src="../../setting/plugins/jQuery/jQuery-2.1.4.js"></script>
<script src="../../setting/bootstrap/bootstrap.js"></script>
<script src="../../setting/plugins/datatables/jquery.dataTables.js"></script>
<script src="../../setting/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="../../setting/plugins/slimScroll/jquery.slimscroll.js"></script>
<script src="../../setting/plugins/fastclick/fastclick.js"></script>
<script src="../../setting/app.js"></script>
<script src="../../setting/plugins/daterangepicker/moment.js"></script>
<script src="../../setting/plugins/daterangepicker/daterangepicker.js"></script>
<script src="../../setting/plugins/select2/select2.full.js"></script>
<script src="../../setting/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script>$(function(){$("#Tanggal_Lahir").daterangepicker({singleDatePicker:true,showDropdowns:true,format:"YYYY-MM-DD"});$("#data").dataTable({scrollX:true})});</script>
<script>$(function(){$("#Jam_Mulai").datetimepicker({format:"HH:mm"});$("#Jam_Selesai").datetimepicker({format:"HH:mm"})});</script>
<script type="text/javascript">$(document).ready(function(){$(".open_modal").click(function(b){var a=$(this).attr("id");$.ajax({url:"jadwal_modal_edit.php",type:"GET",data:{Id_Jadwal:a,},success:function(c){$("#ModalEditJadwal").html(c);$("#ModalEditJadwal").modal("show",{backdrop:"true"})}})});$(".open_modal").click(function(b){var a=$(this).attr("id");$.ajax({url:"nilai_modal_edit.php",type:"GET",data:{Id_Nilai:a,},success:function(c){$("#ModalEditNilai").html(c);$("#ModalEditNilai").modal("show",{backdrop:"true"})}})})});</script>
<script>function confirm_delete(a){$("#modal_delete").modal("show",{backdrop:"static"});document.getElementById("delete_link").setAttribute("href",a)};</script>