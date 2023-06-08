<?php
// check connection 
require('./connnection.php');

$id = $_GET['id'];
$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$query = "update kontak set nama='$nama', nomor='$nomor' where id=$id";

if (mysqli_query($conn, $query)) {
  header("Location: index.php");
} else {
  echo "Error:" . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
