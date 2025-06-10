
<?php
   include "koneksi.php";
   $nama=$_POST['nama'];
   $alamat=$_POST['alamat'];
   $tgl_lahir=$_POST['tgl_lahir'];
   $no_tlp=$_POST['no_tlp'];
   $username=$_POST['username'];
   $password=$_POST['password'];
//$status=$_POST['status']
   $sql="insert into tb_petugas(nama,alamat,tgl_lahir,no_tlp,username,password)

   values('$nama','$alamat', '$tgl_lahir', '$no_tlp', '$username', '$password'   )";
      $query = mysqli_query($db_link, $sql);
      if($query)
      {
		header('location:bacatabel_petugas.php');
        echo"data berhasil disimpan";
      }
      else
      {
        echo"Gagal disimpan siswa";
      }
?>