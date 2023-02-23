<?php // require 'phpconnect.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>| Login</title>
    <style>
      body {
        background-color: #f2f2f2;
      }

      .login-box {
        max-width: 400px;
        margin: 100px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      }

      .login-box h2 {
        text-align: center;
      }

      .login-box img {
        display: block;
        margin: 0 auto;
        width: 100px;
        height: 100px;
        object-fit: contain;
      }

      .login-box input[type="text"],
      .login-box input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-bottom: 2px solid #ccc;
        font-size: 16px;
      }

      .login-box input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="login-box">
      <h2>Login</h2>
      <form method="POST" action="login.php">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Login">
      </form>
    </div>
  </body>
</html>
  <?php /*
  if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if (!empty($username && $password)) {
      $sql =" SELECT * FROM login WHERE username='$username' and password = '$password'";
      $result = mysqli_query($conn, $sql);
      $result_check = mysqli_num_rows($result);
      if ($result_check == 1) {
        echo "you logged in!";
        session_start();
        $_SESSION['username'] = "$username";
        header("Location: sparkidash.php");
        echo $_SESSION['username'];
        $time = time ();
        $setTime = time () + 600;
        if (empty ( $_SESSION ['setTime'] ) || !isset ( $_SESSION ['setTime'] )) {
            $_SESSION ['setTime'] = $setTime;
        }
      }else{
        echo "failed username or password";
      }
    }else{
      echo '<span style="color:#8b0000;text-align:center;">cannot be empty :(</span>';
    }
  }*/
?>