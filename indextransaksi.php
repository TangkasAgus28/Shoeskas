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
          <h1>FORM TRANSAKSI</h1>
          <br>
          <br>
          <br>
         <form action="aksi_tambahtransaksi.php" method="POST">
                <label>NAMA</label>
                <input type="text" name="nama" id="nama">

                <br>
                <label>ALAMAT</label>
                <input type="textarea" name ="alamat" id ="alamat">
                <br>
                <label>NAMA BARANG</label>
                <input type="text" name ="namabr" id ="namabr">
                <br>
                <label>HARGA BARANG</label>
                <input type="text" name="harga" id ="harga">
                <br>
                <label>JUMLAH BARANG</label>
                <input type="text" name ="jumlahbr" id ="jumlahbr">


                <br>
                <label>TOTAL</label>
                <input type="total" name ="total">



           <br>

           <label> PILIH METODE PENGIRIMAN  :  </label>
           <select name ="option">
           <option value="Member">CARGO</option>
           <option value="Admin">SICEPAT</option>
           </select>
           <br>

           <br>

           <label> PILIH METODE PEMBAYARAN  :  </label>
           <select name ="option">
           <option value="Member">COD</option>
           <option value="Admin">TRANSFER</option>
           </select>
           <br>
           <br>
           <br>


            <button type="submit" name="Login" class="btn-login">SIMPAN</button>
                 <br>
                 <br>
             <button type="reset" name="Reset" class="btn-login">BATAL</button>

                  <br>
                  <br>
                  <h2 align="center"><a href="indexmenu_user1.php">KEMBALI</a>
                  </h2>
          </form>
        </div>
    </body>
</html>