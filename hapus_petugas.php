<?php
	include "koneksi.php";

	$id = $_GET['id'];
	$sql = "DELETE FROM tb_petugas WHERE Codemember = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:bacatabel_petugas.php');
	}
	else
	{
	echo "hapus siswa Gagal";
	}
?>