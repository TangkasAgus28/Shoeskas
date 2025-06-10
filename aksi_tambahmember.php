<?php
   include "koneksi.php";
   $nama=$_POST['nama'];
   $alamat=$_POST['alamat'];
   $kota=$_POST['kota'];
   $tgl_lahir=$_POST['tgl_lahir'];
   $no_tlp=$_POST['no_tlp'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   $status=$_POST['status'];
//$status=$_POST['status']
   $sql="insert into tb_registrasi(nama,alamat,kota,tgl_lahir,no_tlp,username,password,status)

   values('$nama','$alamat','$kota', '$tgl_lahir', '$no_tlp', '$username', '$password', '$status'    )";
      $query = mysqli_query($db_link, $sql);
      if($query)
      {
		header('location:indexuser.php');
        echo"Data berhasil disimpan";
      }
      else
      {
        echo"Gagal disimpan";
      }
?>