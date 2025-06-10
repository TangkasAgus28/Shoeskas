<?php
    include "koneksi.php";
    $Merek_Sepatu=$_POST['Merek_Sepatu'];
    $Size_Sepatu=$_POST['Size_Sepatu'];
    $Warna_Sepatu=$_POST['Warna_Sepatu'];
    $Harga_Sepatu=$_POST['Harga_Sepatu'];
    $Gambar_barang=$_POST['Gambar_barang'];
    $Stok_Barang =$_POST['Stok_Barang'];
    $Jumlah_Barang =$_POST['Jumlah_Barang'];

    $sql = "insert into tb_barang(Merek_Sepatu,Size_Sepatu,Warna_Sepatu, Harga_Sepatu,Gambar_barang, Stok_Barang,Jumlah_Barang)

values('$Merek_Sepatu','$Size_Sepatu','$Warna_Sepatu','$Harga_Sepatu','$Gambar_barang','$Stok_Barang','$Jumlah_Barang')";
 $query =mysqli_query($db_link,$sql);
 if($query)
 {
 header('location:bacatabel_barang.php');
 //echo"Data berhasil tersimpan";
 //echo"<a href=databarang.php>Cek update</a>";
 }
 else
 {
 echo"Data gagal disimpan";
 }
?>