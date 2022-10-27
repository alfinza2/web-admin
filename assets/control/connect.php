<?php
// $konek = mysqli_connect("localhost", "u309806665_idns", "Afifi15051999", "u309806665_idns");
// $konek = mysqli_connect("localhost", "root", "", "idns");
$konek = mysqli_connect("localhost", "root", "", "uts_3971");
if(mysqli_connect_errno()){
	printf ("Gagal terkoneksi : ".mysqli_connect_error());
	exit();
}	
?>