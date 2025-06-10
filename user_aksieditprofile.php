<?php
    include "koneksi.php";
    $id=$_GET['id'];
    $username=$_POST['username'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $kota=$_POST['kota'];
    $foto=$_POST['foto'];
    $tgl_lahir=$_POST['tgl_lahir'];
    $no_tlp=$_POST['no_tlp'];


	$sql2 = "UPDATE tb_registrasi SET username='$username', nama= '$nama',alamat='$alamat',kota='$kota',foto='$foto', tgl_lahir= '$tgl_lahir' , no_tlp='$no_tlp' WHERE username = '$id'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
 {
 header('location:user_profile.php');
 //echo"Data berhasil tersimpan";
 //echo"<a href=databarang.php>Cek update</a>";
 }
 else
 {
 echo"Data gagal disimpan";
 }
?>