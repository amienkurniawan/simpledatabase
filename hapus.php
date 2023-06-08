<?php
// check connection test
require('./connnection.php');

$id = $_GET['id'];

$query = "delete from kontak where id='$id'";

if (mysqli_query($conn, $query)) {
  header("Location: index.php");
} else {
  echo "Error:" . $query . "<br>" . mysqli_error($conn);
}

$mysqli_close($conn);
