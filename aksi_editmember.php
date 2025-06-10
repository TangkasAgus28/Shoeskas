<?php
   include "koneksi.php";
   $id =$_GET['id'];
   $nama=$_POST['nama'];
   $alamat=$_POST['alamat'];
   $kota=$_POST['kota'];
   $tgl_lahir=$_POST['tgl_lahir'];
   $no_tlp=$_POST['no_tlp'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   $status=$_POST['status'];

	$sql2 = "UPDATE tb_registrasi SET nama ='$nama', alamat='$alamat',kota = '$kota', tgl_lahir = '$tgl_lahir',no_tlp='$no_tlp', username = '$username' , password ='$password', status ='$status' WHERE Codemember = '$id'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:bacatabel_member.php');
    echo "Data berhasil di Perbarui";
	}
	else
	{
	echo "Edit siswa gagal";
	}
?>