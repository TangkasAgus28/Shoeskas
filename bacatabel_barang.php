<?php
		include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
   <h2 align="center"> DATA BARANG</h2>
      <hr>
      <center><input type="button" value="Tambah Data Barang" onclick="location.href='indexbarang.php'">
•>>
 <input type="button"value="Cetak"        onclick="location.href='cetak_barang.php'"></center>
    <br>
    <h align ="center" >
    <left> <form action="" method ="get">
    <label> Pencarian : </label>
    <input type ="text" name ="cari" placeholder ="Telusuri...">
    <input type ="submit" value ="Cari">
    </form></left>
    </h>

<h2 align="center"><a href="indexmenu_admin1.php">KEMBALI</a></h2>


      <br>
	  <table border='1' align="center" cellspacing="0" cellpadding='5'>
		<tr>
        <td align="center">CODEBARANG</td>
        <td align="center">MEREK SEPATU</td>
        <td align ="center"> DESKRIPSI</td>
        <td align="center">SIZE SEPATU</td>
        <td align="center">WARNA SEPATU</td>
        <td align="center">HARGA SEPATU</td>
        <td align="center">GAMBAR BARANG</td>
        <td align="center">STOK BARANG</td>
        <td align="center"> JUMLAH BARANG</td>
	   	<td align="center">OPTIONS</td>
		</tr>


<?php
         if(isset($_GET['cari'])){
         $cari = $_GET['cari'];
         $sql = "select * from tb_barang  where Merek_sepatu like '%".$cari."%'";
         }else{
          $sql = "select * from tb_barang";
         }

			$no=1;
			//$sql="SELECT * FROM data1";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr>
            <td align="center"><?php echo "$data[Codebarang]"; ?></td>
            <td align="center"><?php echo "$data[Merek_Sepatu]"; ?></td>

            <td align="center"><?php echo "$data[Deskripsi]"; ?></td>


            <td align="center"><?php echo "$data[Size_Sepatu]"; ?></td>

            <td align="center"><?php echo "$data[Warna_Sepatu]"; ?></td>

            <td align="center"><?php echo "$data[Harga_Sepatu]"; ?></td>

            <td align="center"><img widht=200 height=200 src="<?php echo "img_barang/$data[Gambar_barang]"; ?>"></td>


            <td align="center"><?php echo
"$data[Stok_Barang]"; ?></td>

            <td align="center"><?php echo "$data[Jumlah_Barang]"; ?></td>




            <td align="center">
                        <a href="Edit_indexbarang.php?id=<?php echo "$data[Codebarang]"; ?>">EDIT</a>
						<a href="hapus_barang.php?id=<?php echo "$data[Codebarang]"; ?>" onclick="return confirm ('Data yang dihapus tidak dapat dikembalikan, Yakin akan menghapus?')">HAPUS</a>
					</td>

				<?php
				$no++;
				}
		?>
		</table>


    </body>
</html>