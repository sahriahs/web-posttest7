<?php
  session_start();
  $conn = mysqli_connect("localhost", "root", "", "podcast");
  
  if(!$conn){
    die("Gagal terhubung ke database...".mysqli_connect_error());
  }
?>