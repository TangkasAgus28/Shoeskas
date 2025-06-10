<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
          <h1>FORM LOGIN USER</h1>
                   <Form action ="cekloginuser.php" method="post">

                <label>USERNAME</label><br>
                <input type="text" name ="username"><br>
                <label>PASSWORD</label><br>
                <input type="password" name ="password"><br>

                <button type="submit" name="Login" class="btn-login">LOGIN</button>

                <p align ="center"> Belum Punya Akun? :
                 <a href="indexregister.php">REGISTER disini</a>
                <p align ="center"> Login Sebagai ADMIN? :
                  <a href ="indexadmin.php"> klik disini </a>

          </Form>
        </div>
    </body>
</html>