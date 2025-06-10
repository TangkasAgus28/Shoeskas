<?php
	session_start();
	include "koneksi.php";
	$username = $_POST["username"];
	$password = $_POST["password"];
	$sql="SELECT * FROM tb_admin where username = '$username' and password = '$password'";
	$query = mysqli_query($db_link,$sql);
	if(mysqli_num_rows($query)!=0)
	{
		//echo "<br>Login sukses";
     //echo "<a href=logout.php>  logout</a>";
			$data = mysqli_fetch_array($query);
			$_SESSION['username'] = $data['username'];
			$_SESSION['password'] = $data['password'];
			$_SESSION['Login'] = "Login";			header("location: indexmenu_admin1.php");
	}
	else
	{
		 echo "<br>Login gagal ";
		 echo "<a href=indexadmin.php>Kembali</a>";
	}

?>