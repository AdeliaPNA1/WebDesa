<?php

$conn = mysqli_connect('localhost','root','magang');
$link = mysqli_select_db($conn,"");

if(mysqli_connect_errno()){
	echo "Koneksi ke Database Gagal". mysqli_connect_error();
}//else{
	//echo "Koneksi ke Database Berhasil";
//}

?>