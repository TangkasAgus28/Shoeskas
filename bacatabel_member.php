<?php
		include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
   <h2 align="center"> DATA RIWAYAT LOGIN </h2>
      <hr>
      <center><input type="button" value="Tambah Data" onclick="location.href='indexregister.php'">
        •>
<input type="button"value="Cetak" onclick="location.href='cetak_registrasi.php'">
</center>
<br>

    <h align ="center" >
    <left> <form action="" method ="get">
    <label> Pencarian : </label>
    <input type ="text" name ="cari" placeholder ="Telusuri...">
    <input type ="submit" value ="Cari">
    </form></left>
    </h>

<h2 align="center"><a href="indexmenu_admin1.php">KEMBALI</a></h2>



		<table border='1' cellspacing="0" cellpadding='5'>
		<tr>
        <br>

            <td align="center">CODEMEMBER</td>

            <td align="center">NAMA</td>

            <td align="center">ALAMAT</td>

            <td align="center">KOTA</td>

            <td align="center">TGL.LAHIR</td>

            <td align="center">NO.TLP</td>

            <td align="center">USERNAME</td>

            <td align="center">PASSWORD</td>

	    	<td align="center">OPTIONS</td>
		</tr>

<?php
         if(isset($_GET['cari'])){
         $cari = $_GET['cari'];
         $sql = "select * from tb_registrasi  where Nama like '%".$cari."%'";
         }else{
          $sql = "select * from tb_registrasi";
         }

			$no=1;
			//$sql="SELECT * FROM data1";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr>

            <td align="center"><?php echo "$data[Codemember]"; ?></td>

            <td align="center"><?php echo "$data[nama]"; ?></td>

            <td align="center"><?php echo "$data[alamat]"; ?></td>

            <td align="center"><?php echo "$data[kota]"; ?></td>

            <td align="center"><?php echo "$data[tgl_lahir]"; ?></td>

            <td align="center"><?php echo "$data[no_tlp]"; ?></td>

            <td align="center"><?php echo "$data[username]"; ?></td>

            <td align="center"><?php echo "$data[password]"; ?></td>

            <td align="center">
<a href="Edit_indexmember.php?id=<?php echo "$data[Codemember]"; ?>">EDIT</a>
						<a href="hapus_member.php?id=<?php echo "$data[Codemember]"; ?>" onclick="return confirm ('Data yang dihapus tidak dapat dikembalikan, Yakin Akan Menghapus?')">HAPUS</a>
	 </td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
     </body>
</html>