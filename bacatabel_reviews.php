<?php
		include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="">
</head>
<body>
   <h2 align ="center"> DATA ULASAN</h2>


    <h align ="center" >
    <left> <form action="" method ="get">
    <label> Pencarian : </label>
    <input type ="text" name ="cari" placeholder ="Telusuri...">
    <input type ="submit" value ="Cari">
    </form></left>
    </h>
        <br>

  <h2 align="center"><a href="indexmenu_admin1.php">KEMBALI</a></h2>


		<table border='1' align ="center" cellspacing="0" cellpadding='5'>
		<tr>
            <td align="center">CODEREVIEW</td>
            <td align="center">NAMA </td>
		    <td align ="center">FOTO</td>
            <td align="center">RATE</td>
            <td align="center">REVIEW</td>
            <td align="center">●></td>

		</tr>
		<?php
         if(isset($_GET['cari'])){
         $cari = $_GET['cari'];
         $sql = "select * from tb_rate  where Nama like '%".$cari."%'";
         }else{
          $sql = "select * from tb_rate";
         }

			$no=1;
			//$sql="SELECT * FROM data1";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr>

            <td align="center"><?php echo "$data[Code_rate]"; ?></td>

            <td align="center"><?php echo "$data[nama]"; ?></td>

            <td align="center"><?php echo "$data[foto]"; ?></td>

            <td align="center"><?php echo "$data[star]"; ?></td>


            <td align="center"><?php echo "$data[rate]"; ?></td>


            <td align="center">
						<a href="hapus_rate.php?id=<?php echo "$data[Code_rate]"; ?>" onclick="return confirm ('Data yang dihapus tidak dapat dikembalikan, Yakin akan menghapus?')">HAPUS</a>
					</td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>

   </body>
</html>