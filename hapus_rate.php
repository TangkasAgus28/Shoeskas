<?php
	include "koneksi.php";

	$id = $_GET['id'];
	$sql = "DELETE FROM tb_rate WHERE Code_rate = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:bacatabel_reviews.php');
	}
	else
	{
	echo "Hapus Data Gagal";
	}
?>