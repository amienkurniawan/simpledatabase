<?php
// check connection 
require('./connnection.php');

$nama = $_POST['nama'];
$nomor = $_POST['nomor'];

$query = "insert into kontak (nama,nomor) values ('$nama','$nomor')";

if (mysqli_query($conn, $query)) {
  header("Location: index.php");
} else {
  echo "Error:" . $query . "<br>" . mysqli_error($conn);
}

$mysqli_close($conn);
