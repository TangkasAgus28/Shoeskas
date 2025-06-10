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
 $query = "SELECT * FROM tb_registrasi";

 $result = mysqli_query($con , $query);

 ?>
	<div>
      <h2>DATA REGISTRASI</h2>
		<table>
			<tr>
			  <th width="50px">CODEMEMBER</th>
              <th width="150px">NAMA</th>
              <th width ="150px">ALAMAT</th>
               <th width="150px">KOTA</th>
              <th width="200px">TGL_LAHIR</th>
               <th width="150px">NO TLP</th>
              <th width="150px">USERNAME</th>
              <th width="150px">PASSWORD</th>
               <th width="150px">STATUS</th>
			</tr>
			<tr>
		<?php
			$no=1;
			$sql="SELECT * FROM tb_registrasi";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr>
  <td><?php echo "$data[Codemember]"; ?></td>
  <td><?php echo "$data[nama]"; ?></td>
  <td><?php echo "$data[alamat]"; ?></td>
  <td><?php echo "$data[kota]"; ?></td>
  <td><?php echo "$data[tgl_lahir]"; ?></td>
  <td><?php echo "$data[no_tlp]"; ?></td>
  <td><?php echo "$data[username]"; ?></td>
  <td><?php echo "$data[password]"; ?></td>
  <td><?php echo "$data[status]"; ?></td>

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