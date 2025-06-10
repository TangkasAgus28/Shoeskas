<?php
	include "koneksi.php";

	$id = $_GET['id'];
	$sql = "DELETE FROM tb_transaksi WHERE Codetransaksi = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:bacatabel_transaksi.php');
	}
	else
	{
	echo "Hapus Riwayat Transaksi Gagal";
	}
?>