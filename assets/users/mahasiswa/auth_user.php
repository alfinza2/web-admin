<?php
if (!isset ($_SESSION["Login"]) || $_SESSION ["Login"] != true){
	header ("Location: ../../linked/404.php");
}
else if ($_SESSION["Id_Usergroup"] = 3){
	$_SESSION ["Login"] = true;
}
else{
	header ("Location: ../../linked/404.php");
}
?>