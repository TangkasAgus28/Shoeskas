<?php
    include 'koneksi.php';
 ?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
          <h1>EDIT PROFILE</h1>
          <br>
          <br>
          <br>
               <?php
			$id=$_GET['id'];
			$sql = "SELECT * FROM tb_registrasi WHERE username='$id'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>

  <form action='user_aksieditprofile.php?id=<?php echo "$id"; ?>' method='POST'>



                <input type="file" name ="foto" id="foto"  value ="<?php echo "img_profile/$data[foto]"?>">
                <br>

                <label> Username</label>
                <input type ="text" name="username" value="<?php echo $data['username']?>">
                <br>

                <label>Nama</label>
                <input type="text" name="nama" id="nama" value ="<?php echo $data['nama']?>">
                <br>

                <label>Alamat</label>
                <input type="textarea" name ="alamat" value ="<?php echo $data['alamat']?>">
                <br>

                <label>Kota</label>
                <input type="text" name ="kota" value ="<?php echo $data ['kota']?>">
                <br>

                <label>Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" value ="<?php echo $data['tgl_lahir']?>">
                <br>

                <label>No Telepon</label>
                <input type="text" name ="no_tlp" value ="<?php echo $data['no_tlp']?>">
                <br>





            <button type="submit" name="Login" class="btn-login">UPDATE</button>
                 <br>
                 <br>
             <button type="reset" name="Reset" class="btn-login">BATAL</button>

                  <br>
                  <br>
                  <h2 align="center">
                  <a href="user_profile.php">KEMBALI</a>
                  </h2>
          </form>
        </div>
    </body>
</html>