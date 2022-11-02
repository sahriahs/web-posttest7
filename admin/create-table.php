<?php
require 'koneksi.php';

if (isset($_POST['tambah'])) {
  $judul = $_POST['judul'];
  $pencipta = $_POST['pencipta'];
  $poster = $_POST['poster'];
  $date = $_POST['date'];
  $desc = $_POST['desc'];

  if ($judul && $pencipta && $poster && $date && $desc) {
    $sql = "INSERT INTO podacst_file VALUES('', '$judul','$pencipta','$poster','$date', '$desc')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "
          <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'admin.php';
          </script>
        ";
    } else {
      echo" ";
    }
  } else {
    echo "
          <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'create-table.php';
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
  <title>Document</title>
</head>

<body>
  <form action="">
    <label for="judul">Judul</label><br>
    <input type="text" name="judul" required><br><br>

    <label for="pencipta">Nama Pencipta</label><br>
    <input type="text" name="pencipta" required><br><br>

    <label for="poster">Poster</label><br>
    <input type="file" name="poster" required><br><br>

    <!-- <label for=""></label><br>
    <input type="text" required><br><br> -->

    <label for="date">Tanggal</label><br>
    <input type="date" name="date" required><br><br>

    <label for="desc">Deskripsi</label><br>
    <input type="text" name="desc" required><br><br>

    <button type="submit" name="tambah">Tambah</button>
  </form>

</body>

</html>