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
          <h1>DAFTAR PETUGAS</h1>
          <br>
          <br>
          <br>
         <form action="aksi_tambahpetugas.php" method="POST">
                <label>NAMA</label>
                <input type="text" name="nama" id="nama">
                <br>
                <label>ALAMAT</label>
                <input type="textarea" name ="alamat" id ="alamat">
                <br>
                <label>TANGGAL LAHIR</label>
                <input type="date" name="tgl_lahir" id =tgl_lahir>
                <br>
                <label>NO TELEPON</label>
                <input type="text" name ="no_tlp" id ="no_tlp">
                <br>
                <label> USERNAME</label>
                <input type ="text" name="username" id ="username">
                <br>
                <label>PASSWORD</label>
                <input type="password" name ="password">

                 <br>
                 <br>


            <button type="submit" name="Login" class="btn-login">SIMPAN</button>
                 <br>
                 <br>
             <button type="reset" name="Reset" class="btn-login">BATAL</button>

                  <br>
                  <br>
                  <h2 align="center"><a href="bacatabel_petugas.php">KEMBALI</a>
                  </h2>
          </form>
        </div>
    </body>
</html>