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
  <?php include "componen/menu.php"?>
  <h2>Sofware</h2>

  <table>
    <tr>
      <th>sn</th>
      <th>tanggal_rilis</th>
      <th>jenis</th>
      <th>quantity</th>
      <th>spesifikasi</th>
      <th>gambar</th>   
    </tr>
    
    <?php include "proses/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM buku");

    while ($row = mysqli_fetch_array($data)){
    ?>
    <tr>
      <td><?php echo $row['sn']?></td>
      <td><?php echo $row['tanggal_rilis']?></td>
      <td><?php echo $row['jenis']?></td>
      <td><?php echo $row['quantity']?></td>
      <td><?php echo $row['spesifikasi']?></td>
      <td><a href="file/<?php echo $row['gambar'] ?>">Download</a></td>
      <td>
        <a href="edit.php?kode=<?php echo $row['sn'] ?>">edit</a> |
        <a href="hapus.php?kode=<?php echo $row['sn']?>">hapus</a>
      </td>
    </tr>
    <?php 
    } 
    ?>
  </table>
</body>
</html>