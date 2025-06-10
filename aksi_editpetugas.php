


<?php
   include "koneksi.php";
   $id =$_GET['id'];
   $nama=$_POST['nama'];
   $alamat=$_POST['alamat'];
   $tgl_lahir=$_POST['tgl_lahir'];
   $no_tlp=$_POST['no_tlp'];
   $username=$_POST['username'];
   $password=$_POST['password'];


	$sql2 = "UPDATE tb_petugas SET nama ='$nama', alamat='$alamat', tgl_lahir ='$tgl_lahir',no_tlp='$no_tlp', username = '$username' , password ='$password' WHERE Codemember = '$id'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:bacatabel_petugas.php');
    echo "data berhasil di update";
	}
	else
	{
	echo "Edit siswa gagal";
	}
?>