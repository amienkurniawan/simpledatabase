<?php
// test ini connection
  $conn = mysqli_connect('localhost', 'root', '', 'crud');
  if (!$conn) {
    die('koneksi gagal:' . mysqli_connect_error());
  }
