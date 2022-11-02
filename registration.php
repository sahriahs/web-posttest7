<?php
  require 'koneksi.php';

  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpass = $_POST['cpass'];

    if($password===$cpass){
      $password= password_hash($password, PASSWORD_DEFAULT);
      if(mysqli_fetch_assoc($result)){
        echo "
          <script>
            alert('Username telah digunakan');
            document.location.href= 'registration.php';
          </script>
        ";
      } else{
        $result = mysqli_query($conn, "INSERT INTO user VALUEs ('', '$username', '$password')");
        if(mysqli_affected_rows($conn)>0){
          echo "
            <script>
              alert('Registrasi berhasil!');
              document.location.href= 'registration.php';
            </script>
          ";
        } else{
          echo "
            <script>
              alert('Registrasi gagal!');
              document.location.href= 'registration.php';
            </script>
          ";
        }
      }
    } else{
      echo "
        <script>
          alert('Password tidak sama!');
        </script>
      ";
    }  
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="registrationStyle.css"/>
  <title>Digital Podcast</title>
</head>
<body>
  <div class="registration" align="center">
    <div id="logo"><img src="image/digipod_logo.png" width="200px"></div>
    <h1>Digital Podcast <br> Registrasi</h1>
  <?php
    if(isset($_POST['submit'])){
      echo "anda registration";
    } else{
  ?>    
    <form action="" method="post" class="form">
      <!-- <input name="name" type="text" placeholder="Name" class="form-content"> <br> -->
      <input name="username" type="text" placeholder="Username" class="form-content"> <br>
      <!-- <input name="email" type="email" placeholder="Email" class="form-content"> <br> -->
      <input name="password" type="password" id="" placeholder="Password" class="form-content"><br>
      <input name="cpass" type="password" id="" placeholder="Confirm Password" class="form-content"><br>
      <button name="submit" type="submit" id="submit">Daftar</button><br><br>
    </form>
  <?php
    }
  ?>    
  </div>

</body>
</html>