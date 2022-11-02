<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="loginStyle.css"/>
  <title>Digital Podcast</title>
</head>
<body>


<?php
  include 'admin/koneksi.php';

  if(isset($_POST['proseslogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result=mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if(mysqli_num_rows($result)===1){
      $row=mysqli_fetch_assoc($result);
      if(password_verify($password, $row['password'])){
        $_SESSION["userlogin"]=true;
        echo"
          <script>
            alert('Berhasil masuk!');
            document.location.href= 'index.php';
          </script>        
        ";

      }
    }
    $error = true;
  } elseif ($username =='admin' and $password == 'admin'){
      $_SESSION["adminlogin"]=true;
      echo"
        <script>
          document.location.href = 'admin/admin.php';
        </script>
      ";
  }
?>
  
  <div class="login" align="center">
    <div id="logo"><img src="image/digipod_logo.png" width="200px"></div>
    <h1>Digital Podcast <br> Masuk</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="form">
      <input type="text" name="username" placeholder="Username" class="form-content"> <br>
      <input type="password" name="password" id="" placeholder="Password" class="form-content"><br>
      <button type="submit" name="proseslogin" id="submit">Masuk</button><br><br>
      <div class="form-lupa-sandi">
        <a href="">Lupa kata sandi?</a>
      </div>
      <div>
        Belum memiliki akun? 
        <a href="registration.php">Buat akun</a>
      </div>
    </form>
  </div>

</body>
</html>