<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Title kontak</title>
</head>

<body>
  <h1>Daftar kontak</h1>
  <!-- buat koneksi ke database -->
  <?php
  require('./connnection.php');

  // mendapatkan data kontak dari database
  $query = 'Select * from kontak';
  $data = mysqli_query($conn, $query);

  if (mysqli_num_rows($data) > 0) {
    echo "<table>
      <th>Nama</th>
      <th>Nomor</th>
      <th>Action</th>";

    foreach ($data as $row) {
      echo "<tr>";
      echo "<td>" . $row['nama'] . "</td>";

      echo "<td>" . $row['nomor'] . "</td>";
      echo "<td> 
      <a href=edit.php?id=" . $row['id'] . ">Ganti</a>
      <a href=hapus.php?id=" . $row['id'] . " >Hapus</a></td>";
      echo "</tr>";
    }

    echo "</table>";
  } else {
    echo "tidak ada data kontak";
  }
  mysqli_close($conn);
  ?>

  <form action="tambah.php" method="post">
    <label for="nama">Nama : </label>
    <input type="text" name="nama" id="" require>

    <label for="nama">Nomor : </label>
    <input type="text" name="nomor" id="" require>

    <button type="submit">submit</button>
  </form>
</body>

</html>