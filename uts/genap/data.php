<!DOCTYPE html>
<html lang="en">
<head>
  <style>
      table{
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }
      td, th{
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even){
        background-color: #dddddd;
      }
  </style>
</head>

<body>
  <?php include "fitur/menu.php"?>
  <h2>Data</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Tanggal Lahir</th>
      <th>Photo</th>
      <th>Action</th>   
    </tr>
    
    <?php include "proses/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM biodata");

    while ($row = mysqli_fetch_array($data)){
    ?>
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['nama']?></td>
      <td><?php echo $row['alamat']?></td>
      <td><?php echo $row['tanggal_lahir']?></td>
      <td><img src="photo/<?php echo $row['photo'] ?>"width="100">
    </td>
      <td>
        <a href="edit.php?id=<?php echo $row['id'] ?>">edit</a> |
        <a href="hapus.php?id=<?php echo $row['id']?>">hapus</a>
      </td>
    </tr>
    <?php 
    } 
    ?>
  </table>
</body>
</html>