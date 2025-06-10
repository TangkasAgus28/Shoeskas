<?php
		include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="">
</head>
<body>
   <h2 align ="center"> DATA TRANSAKSI</h2>



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
            <td>CODE TRANSAKSI</td>
            <td>CODE MEMBER</td>
            <td>CODE SEPATU</td>
			<td>NAMA</td>
            <td>ALAMAT</td>
            <td>NO TLP </td>
			<td>MEREK </td>
		    <td>HARGA</td>
            <td>JUMLAH </td>
            <td>TOTAL</td>
            <td>BAYAR</td>
            <td>KEMBALIAN</td>
            <td>OPTIONS</td>


		</tr>
		<?php
         if(isset($_GET['cari'])){
         $cari = $_GET['cari'];
         $sql = "select * from tb_transaksi where Nama like '%".$cari."%'";
         }else{
          $sql = "select * from tb_transaksi";
         }

			$no=1;
			//$sql="SELECT * FROM data1";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr>

            <td align="center"><?php echo "$data[Codetransaksi]"; ?></td>
            <td align="center"><?php echo "$data[Codemember]"; ?></td>
            <td align="center"><?php echo "$data[Codebarang]"; ?></td>
            <td align="center"><?php echo "$data[nama]"; ?></td>
            <td align="center"><?php echo "$data[alamat]"; ?></td>
            <td align="center"><?php echo "$data[no_tlp]"; ?></td>
            <td align="center"><?php echo "$data[Merek_Sepatu]"; ?></td>
            <td align="center"><?php echo "$data[Harga_Sepatu]"; ?></td>
            <td align="center"><?php echo "$data[jumlah]"; ?></td>
            <td align="center"><?php echo "$data[total]"; ?></td>
            <td align="center"><?php echo "$data[bayar]"; ?></td>
            <td align="center"><?php echo "$data[kembalian]"; ?></td>



            <td align="center">
						<a href="hapus_transaksi.php?id=<?php echo "$data[Codetransaksi]"; ?>" onclick="return confirm ('Data yang sudah dihapus tidak dapat dikembaliakn, Yakin akan menghapus?')">HAPUS</a>
					</td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>

   </body>
</html>



