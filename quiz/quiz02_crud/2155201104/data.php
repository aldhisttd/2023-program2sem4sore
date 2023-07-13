<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>

<body>
  <?php include "component/menu.php" ?>

  <h2>Data Barang</h2>

  <table>
    <tr>
      <td>ISBN</td>
      <td>Judul</td>
      <td>Kategori</td>
      <td>Stok</th>
      <td>File Ebook</th>
      <td>Aksi</td>
    </tr>

    <?php

    include "proses/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM quiz2");

    while ($row = mysqli_fetch_array($data)) {
    ?>
      <tr>
        <td><?php echo $row['isbn'] ?></td>
        <td><?php echo $row['judul'] ?></td>
        <td><?php echo $row['kategori'] ?></td>
        <td><?php echo $row['stok'] ?></td>
        <td>
          <a href="file/<?php echo $row['file_ebook'] ?>">Download</a>
        </td>
        <td>
          <a href="hapus.php?kode=<?php echo $row['isbn'] ?>">Hapus</a> -
          <a href="edit.php?kode=<?php echo $row['isbn'] ?>">Edit</a>
        </td>
      </tr>

    <?php
    }
    ?>
  </table>

</body>

</html>