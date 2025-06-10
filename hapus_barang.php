<?php
	include "koneksi.php";

	$id = $_GET['id'];
	$sql = "DELETE FROM tb_barang WHERE Codebarang = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:bacatabel_barang.php');
	}
	else
	{
	echo "Hapus Barang Gagal";
	}
?>