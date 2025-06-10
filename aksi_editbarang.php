<?php
   include "koneksi.php";
   $id =$_GET['id'];
   $Merek_Sepatu=$_POST['Merek_Sepatu'];
   $Deskripsi=$_POST['Deskripsi'];
   $Size_Sepatu=$_POST['Size_Sepatu'];
   $Warna_Sepatu=$_POST['Warna_Sepatu'];
   $Harga_Sepatu=$_POST['Harga_Sepatu'];
   $Gambar_barang=$_POST['Gambar_barang'];
   $Stok_Barang=$_POST['Stok_Barang'];
   $Jumlah_Barang=$_POST['Jumlah_Barang'];

	$sql2 = "UPDATE tb_barang SET Merek_Sepatu='$Merek_Sepatu', Deskripsi='$Deskripsi', Size_Sepatu = '$Size_Sepatu',Warna_Sepatu ='$Warna_Sepatu',Harga_Sepatu='$Harga_Sepatu',Gambar_barang='$Gambar_barang', Stok_Barang = '$Stok_Barang' , Jumlah_Barang ='$Jumlah_Barang' WHERE Codebarang = '$id'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:bacatabel_barang.php');
    echo "data berhasil di update";
	}
	else
	{
	echo "Edit barang gagal";
	}
?>