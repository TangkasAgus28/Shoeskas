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
          <h1>TAMBAH BARANG</h1>
          <br>
          <br>
          <br>


  <form action="aksi_tambahbarang.php" method="POST">


                <label>MEREK SEPATU</label>
                <input type="text" name ="Merek_Sepatu" id="Merek_Sepatu">
                <br>
                <label>SIZE SEPATU</label>
                <input type="text" name ="Size_Sepatu" id="Size_Sepatu">
                <br>
                <label>WARNA SEPATU</label>
                <input type="text" name="Warna_Sepatu" id="Warna_Sepatu">
                <br>
                <label>HARGA SEPATU</label>
                <input type="text" name ="Harga_Sepatu" id="Harga_Sepatu">
                <br>
                <label>GAMBAR BARANG</label>
                <input type="file" name ="Gambar_barang" id="img_barang/Gambar_barang">
                <br>
                <label> STOK BARANG</label>
                <input type ="text" name="Stok_Barang" id="Stok_Barang">
                <br>
                <label>JUMLAH BARANG</label>
                <input type="text" name ="Jumlah_Barang" id="Jumlah_Barang">

                 <br>
                 <br>


             <button type="submit" name= "Login" class="btn-login">SIMPAN</button>
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






