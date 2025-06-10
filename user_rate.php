<?php
  session_start();
  if(isset($_SESSION['username'])){
    include "koneksi.php";
  }else{
    header("location:index.php");
  }
?>
<html>
    <head>
        <title>Rate</title>
        <link rel="stylesheet" href="style.css">
    </head>

<body>
   <div class="container">
          <h1>FORM RERIEWS</h1>

  <form name="autoSumForm" method="post" bgcolor="red" width="75%" action="aksi_tambahrate.php">

    <?php
      $user=$_SESSION['username'];
      $sql = "SELECT * FROM tb_registrasi WHERE username ='$user'";
      $query = mysqli_query($db_link,$sql);
      $data = mysqli_fetch_array($query);
    ?>

      <tr>
        <label>FOTO</label>
        <input name='foto' type='text' id="foto" readonly="readonly" value="<?php echo $data['foto'] ?>">
      </tr>
      <tr>
        <label>NAMA</label>
        <input name='nama' type='text' id="nama" readonly="readonly" value="<?php echo $data['nama'] ?>">
        </tr>



       <tr>
           <label>REVIEWS STARS : </label>
           <select name ="star">
           <option value="100%">100% = 5 Bintang</option>
           <option value="80%">80% = 4 Bintang</option>
           <option value="50%">50% = 3 Bintang</option>
           <option value="30%">30% = 2 Bintang</option>
           <option value="10%">10% = 1 Bintang</option>
           </select>
           </tr>

        <br><br>
      <tr>
        <label>REVIEWS/ULASAN</label>
        <input name='rate' type='text' id="rate">
      </tr>


 <button type="submit" name="Login" class="btn-login">SIMPAN</button>
                 <br>
                 <br>
             <button type="reset" name="Reset" class="btn-login">BATAL</button>

                  <br>
                  <br>
                  <h2 align="center"><a href="indexmenu_user1.php">KEMBALI</a></h2>



     </form>

     </div>
  </body>
  </html>