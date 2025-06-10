
<!DOCTYPE html>
<html>
<head>
 <title>SHOESKAS</title>
 <?php include "koneksi.php"; ?>
</head>
<body>
 <div align="center">
  <h2><b>DATA PRODUK</b></h2>
 <br> <table height="91" border="0">
   <tr><td>
</td>
<?php
    include "koneksi.php";

    $no=1;
    $sql="SELECT * FROM tb_barang";
    $query= mysqli_query($db_link,$sql);
    while($data = mysqli_fetch_array($query)){
    ?>
    <td><table border='0'><tr>
        <td colspan="2" align="center"><img width=200 height=200 src="<?php echo "img_barang/$data[Gambar_barang]"; ?>"></td></tr><tr>
        <td colspan="2" align="center"><?php echo "$data[Merek_Sepatu]"; ?></td></tr><tr>
        <td align="center" border="2" bgcolor='#99FF00'>
        <a href='user_detailproduk.php?id=<?php echo "$data[Codebarang]"; ?>' >DETAIL</a></td>
        <td align="right">Rp. <?php echo number_format($data['Harga_Sepatu']) ?></td></tr></table></td>
    <?php
				$no++;
				}
		?>
</tr></table>
</div>
</body>
</html>