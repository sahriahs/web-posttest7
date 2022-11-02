<?php
  session_start();  
  if(!isset($_SESSION["adminlogin"])){
      header("Location: ../login.php");
      exit;
  }  
  
  require 'koneksi.php';
  // $result = mysqli_query($conn, "SELECT * from podcast_file");

  // $podcast = [];

  // while($row = mysqli_fetch_assoc($result)){
  //   $podcast[] = $row;
  // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
</head>
<body>
  <form action="">
    <button><a href="create-table.php">Tambah</a></button><br>
    
    
    <table border="1">
      <tr>
        <th>id</th>
        <th>Judul</th>
        <th>Pencipta</th>
        <th>Poster</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
          <button>Edit</button>
          <button>Hapus</button>
        </td>
        
      </tr>
    </table>    
  </form>

</body>
</html>