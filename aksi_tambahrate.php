<?php
   include "koneksi.php";
   $nama=$_POST['nama'];
   $foto=$_POST['foto'];
   $rate=$_POST['rate'];
   $star=$_POST['star'];
//$status=$_POST['status']
   $sql="insert into tb_rate(nama,foto,rate,star)

   values('$nama','$foto','$rate', '$star'  )";
      $query = mysqli_query($db_link, $sql);
      if($query)
      {
		header('location:indexmenu_user1.php');
        echo"data berhasil disimpan";
      }
      else
      {
        echo"Gagal disimpan siswa";
      }
?>