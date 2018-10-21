<?php 
include'conn.php';
$id=$_GET['id'];
mysqli_query($masuk,"DELETE FROM maha WHERE id=$id");

if(mysqli_affected_rows($masuk) > 0){
	echo " DATA TELAH DIHAPUS";
	header("location:tampil.php");
}

 ?>