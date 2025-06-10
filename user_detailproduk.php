
<?php
	session_start();
	if(isset($_SESSION['username'])){
		include "koneksi.php";
	}else{
		//header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="#">
</head>
<body>
<h2 align ="center">Detail Produk</h2>
<hr>

               <?php
			$id=$_GET['id'];
			$sql = "SELECT * FROM tb_barang WHERE Codebarang='$id'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>


<form action='aksi_keranjang.php?si=<?php echo "$si"; ?>' method='POST' bg-color="white">

  <h align ="center">
  <table border="1" width="100%">

<tr>
<td rowspan="1"><img width="40%" height="40%" src="<?php echo "img_barang/$data[Gambar_barang]"; ?>"></td>
  <tr>

<td  colspan="2"><h2>MEREK     : <?php echo "$data[Merek_Sepatu]"; ?></h2></td>
</tr>

  <tr>

<td  colspan="2"><h2>DESKRIPSI : <?php echo "$data[Deskripsi]"; ?></h2></td>
</tr>

<tr>
<td colspan="2"><h2>WARNA       : <?php echo "$data[Warna_Sepatu]"; ?></h2></td>
</tr>


<tr>
  <td colspan="2"><h2> SIZE    : <?php echo "$data[Size_Sepatu]"; ?></h2></td>
</tr>

<tr>
<td><h2>STOK : <?php echo "$data[Stok_Barang]"; ?></h2></td>
<tr>
  <div class="price">
    <td><h2>Rp. <?php echo number_format($data['Harga_Sepatu']) ?></h2></td>


<tr>
<td align="center" border="2" bgcolor='black'>
        <a href='transaksi2.php?sid=<?php echo "$data[Codebarang]"; ?>'><input type="button" value="BELI"></a></td>
			</tr>


<!-- td width="17%" align="center" border="2" bgcolor='#cce1f2'>Masukkan Keranjang
<a href='detailproduk.php?id=$data[id]' class="btn btn-primary"></a></td>
</tr> -->

<!-- tr>
<td>Jumlah
<input type="text" autofocus size="1"></td> -->

<!-- td width="15%" align="center" border="2" bgcolor='#cce1f2'>Beli Lukisan
<a href='aksi_keranjang.php?id=$data[id_barang]' class="btn btn-primary"></a></td>
</tr> -->
</table>
</h>


</form>
</body>
</html>