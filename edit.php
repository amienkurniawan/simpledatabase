<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  // check connection 
  require('./connnection.php');

  $id = $_GET['id'];
  $query = "select * from kontak where id=$id";

  $data = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($data);

  $name = $row['nama'];
  $nomor = $row['nomor'];

  mysqli_close($conn);
  ?>

  <form action="update.php?id=<?php echo $id ?>" method="post">
    <label for="nama">Nama : </label>
    <input type="text" name="nama" id="" require value="<?php echo $name ?>">

    <label for="nama">Nomor : </label>
    <input type="text" name="nomor" id="" require value="<?php echo $nomor ?>">

    <button type="submit">update</button>
  </form>

</body>

</html>