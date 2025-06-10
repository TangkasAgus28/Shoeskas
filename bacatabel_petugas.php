<?php
		include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="">
</head>
<body>
   <h2 align ="center"> DATA PETUGAS</h2>
      <hr>
      <center><input type="button" value="Tambah Data" onclick="location.href='indexpetugas.php'">
 •>
      <input type="button"value="Cetak"        onclick="location.href='cetak_petugas.php'"></center>

<br>



    <h align ="center" >
    <left> <form action="" method ="get">
    <label> Pencarian : </label>
    <input type ="text" name ="cari" placeholder ="Telusuri...">
    <input type ="submit" value ="Cari">
    </form></left>
    </h>
        <br>
		<table border='1' cellspacing="0" cellpadding='5'>
		<tr>
            <td align="center">CODEPETUGAS</td>
            <td align="center">NAMA PETUGAS</td>
            <td align="center">ALAMAT PETUGAS</td>
		    <td align ="center">TANGGAL LAHIR</td>
            <td align="center">NO TELEPON</td>
            <td align="center">USERNAME</td>
            <td align="center">PASSWORD</td>
	    	<td align="center">OPTIONS</td>
		</tr>
		<?php
         if(isset($_GET['cari'])){
         $cari = $_GET['cari'];
         $sql = "select * from tb_petugas  where Nama like '%".$cari."%'";
         }else{
          $sql = "select * from tb_petugas";
         }

			$no=1;
			//$sql="SELECT * FROM data1";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr>

            <td align="center"><?php echo "$data[Codepetugas]"; ?></td>

            <td align="center"><?php echo "$data[nama]"; ?></td>

            <td align="center"><?php echo "$data[alamat]"; ?></td>

            <td align="center"><?php echo "$data[tgl_lahir]"; ?></td>

            <td align="center"><?php echo "$data[no_tlp]"; ?></td>

            <td align="center"><?php echo "$data[username]"; ?></td>

            <td align="center"><?php echo "$data[password]"; ?></td>

            <td align="center">
						<a href="Edit_indexpetugas.php?id=<?php echo "$data[Codepetugas]"; ?>">EDIT</a>
						<a href="hapus_petugas.php?id=<?php echo "$data[Codepetugas]"; ?>" onclick="return confirm ('Yakin cuy?')">HAPUS</a>
					</td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
   </body>
</html>