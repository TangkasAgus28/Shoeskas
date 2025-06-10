<?php
	session_start();
	if(isset($_SESSION['username'])){
		include "koneksi.php";
	}else{
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styleprofile.css">
</head>
<body>
  <div class="container">
    <h2>PROFILE</h2>
      <hr>
      <?php
			$id=$_SESSION['username'];
			$sql = "SELECT * FROM tb_registrasi WHERE username='$id'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='user_editprofile.php?id=<?php echo "$id"; ?>' method='POST'>
			<table border="0" cellspacing="10" cellpadding='10'>
            <tr>

              <td>Foto</td>
              <td><img align ="center" width=200 height=200 src="<?php            echo "img_profile/$data[foto]"?>"></td>
              <tr>
              <tr>
              <tr>
			  <td>Codemember</td>
			  <td><?php echo $data['Codemember'] ?></td>
			  </tr>
              <tr>
			  <td>Username</td>
			  <td><?php echo $data['username'] ?></td>
			  </tr>
              <tr>
			  <td>Nama </td>
			  <td><?php echo $data['nama'] ?></td>
			  </tr>
			  <tr>
			  <td>Alamat</td>
			  <td><?php echo $data['alamat'] ?></td>
			  </tr>
              <tr>
              <td>Kota</td>
			  <td><?php echo $data['kota'] ?></td>
              </tr>
              <tr>
              <td>Tgl Lahir</td>
			  <td><?php echo $data['tgl_lahir'] ?></td>
              </tr>
              <tr>
			  <td>NoTelp</td>
			  <td><?php echo $data['no_tlp'] ?></td>
			  </tr>
			  <tr>
			<tr>
				<tr>
				<td></td>
				</tr>
			</table>
          <button type="submit" name="Login" class="btn-login">UPDATE PROFIL</button>
          <br>
           <br>
                  <h2 align="center">
                  <a href="indexmenu_user1.php">KEMBALI</a>
                  </h2>
		</form>
    </div>
</body>
</html>