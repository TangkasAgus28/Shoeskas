<?php
		include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cetak Data</title>
	<style>
		div {
			width: 1300px;
			height: 400px;
			margin: 100px auto;
		}
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
<?php
 //tambahkan dbconnect
 include('koneksi.php');

 //query
 $query = "SELECT * FROM tb_barang";

 $result = mysqli_query($con , $query);

 ?>
	<div>
      <h2>DATA BARANG</h2>
		<table>
			<tr>
			  <th align="center" width="50px">CODEBARANG</th>

			  <th align="center"width="150px">MEREK SEPATU</th>

			  <th align="center" width ="150px">SIZE SEPATU</th>

			  <th align="center"width="200px">WARNA SEPATU</th>

			  <th align="center" width="150px">HARGA SEPATU</th>

			  <th align="center" width="150px">GAMBAR BARANG</th>

			  <th align="center"width="150px">STOK BARANG</th>

			  <th align="center" width="150px">JUMLAH BARANG</th>
			</tr>
			<tr>
		<?php
			$no=1;
			$sql="SELECT * FROM tb_barang";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr>
  <td align ="center"><?php echo "$data[Codebarang]"; ?></td>
  <td align ="center"><?php echo "$data[Merek_Sepatu]"; ?></td>
  <td align ="center"><?php echo "$data[Size_Sepatu]"; ?></td>
  <td align ="center"><?php echo "$data[Warna_Sepatu]"; ?></td>
  <td align ="center"><?php echo "$data[Harga_Sepatu]"; ?></td>
  <td align ="center"><?php echo "$data[Gambar_barang]"; ?></td>
  <td align ="center"><?php echo "$data[Stok_Barang]"; ?></td>
  <td align ="center"><?php echo "$data[Jumlah_Barang]"; ?></td>
				</tr>
				<?php
				$no++;
				}
		?>

		</table>
	</div>

	<script>
		window.print();
	</script>

</body>
</html>