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
          <h1>EDIT REGISTER</h1>
          <br>
          <br>
          <br>
               <?php
			$id=$_GET['id'];
			$sql = "SELECT * FROM tb_registrasi WHERE Codemember='$id'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>

  <form action='aksi_editmember.php?id=<?php echo "$id"; ?>' method='POST'>

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

                <label> Username</label>
                <input type ="text" name="username" value="<?php echo $data['username']?>">
                <br>

                <label>Password</label>
                <input type="password" name ="password" value ="<?php echo $data['password']?>">
                 <br>
                 <br>
         <label> MEMBER status</label>
         <input type="radio" name="status"
                id="status" value="<?php if ($data['status']==Member)echo'checked'?>Member">
                <br>
         <label> ADMIN status</label>
         <input type="radio" name="status"
                id="status" value="<?php if ($data['status']==Admin)echo 'checked'?>Admin">


            <button type="submit" name="Login" class="btn-login">UPDATE</button>
                 <br>
                 <br>
             <button type="reset" name="Reset" class="btn-login">BATAL</button>

                  <br>
                  <br>
                  <h2 align="center"><a href="bacatabel_member">KEMBALI</a>
                  </h2>
          </form>
        </div>
    </body>
</html>