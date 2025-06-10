<!DOCTYPE HTML>
<?php>
  include "koneksi.php"
  ?>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
          <h1>EDIT BARANG</h1>
          <br>
          <br>
          <br>


               <?php
			$id=$_GET['id'];
			$sql = "SELECT * FROM tb_barang WHERE Codebarang='$id'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>


  <form action='aksi_editbarang.php?id=<?php echo "$id"; ?>' method='POST'>


                <label>MEREK SEPATU</label>
                <input type="text" name ="Merek_Sepatu" id="Merek_Sepatu"  value ="<?php echo $data['Merek_Sepatu']?>">
                <br>
                <label>DESKRIPSI PRODUK</label>
                <input type="text" name ="Deskripsi" id="Deskripsi"  value ="<?php echo $data['Deskripsi']?>">
                <br>
                <label>SIZE SEPATU</label>
                <input type="text" name ="Size_Sepatu" id="Size_Sepatu"  value ="<?php echo $data['Size_Sepatu']?>">
                <br>
                <label>WARNA SEPATU</label>
                <input type="text" name="Warna_Sepatu" id="Warna_Sepatu"  value ="<?php echo $data['Warna_Sepatu']?>">
                <br>
                <label>HARGA SEPATU</label>
                <input type="text" name ="Harga_Sepatu" id="Harga_Sepatu"  value ="<?php echo $data['Harga_Sepatu']?>">
                 <br>
                <label>MODEL SEPATU</label>
                <input type="file" name ="Gambar_barang" id="Gambar_barang"  value ="<?php echo "img_barang/$data[Gambar_barang]"?>">
                <br>
                <label> STOK BARANG</label>
                <input type ="text" name="Stok_Barang" id="Stok_Barang"  value ="<?php echo $data['Stok_Barang']?>">
                <br>
                <label>JUMLAH BARANG</label>
                <input type="text" name ="Jumlah_Barang" id="Jumlah_Barang"  value ="<?php echo $data['Jumlah_Barang']?>">

                 <br>
                 <br>


            <button type="submit" class="btn-login">UPDATE</button>
                 <br>
                 <br>
             <button type="reset" name="Reset" class="btn-login">BATAL</button>

                  <br>
                  <br>
                  <h2 align="center"><a href="bacatabel_barang.php">KEMBALI</a>
                  </h2>
          </form>
        </div>
    </body>
</html>