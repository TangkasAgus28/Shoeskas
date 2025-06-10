<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
          <h1>FORM LOGIN ADMIN</h1>
                   <Form action ="cekloginadmin.php" method="post">

                <label>USERNAME</label><br>
                <input type="text" name ="username"><br>
                <label>PASSWORD</label><br>
                <input type="password" name ="password"><br>

                <button type="submit" name="Login" class="btn-login">LOGIN</button>
                <p align ="center"> Login Sebagai USER ?   :
             <a href ="indexuser.php" > klik disini </a>

          </Form>
        </div>
    </body>
</html>