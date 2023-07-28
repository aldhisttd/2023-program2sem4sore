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
  <h2>Data Pembayaran</h2>

  <table>
    <tr>
      <th>nomor_tagihan</th>
      <th>tanggal</th>
      <th>jenis_tagihan</th>
      <th>nominal</th>
      <th>transfer</th>
      <th>Action</th>   
    </tr>
    
    <?php include "proses/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM pembayaran");

    while ($row = mysqli_fetch_array($data)){
    ?>
    <tr>
      <td><?php echo $row['nomor_tagihan']?></td>
      <td><?php echo $row['tanggal']?></td>
      <td><?php echo $row['jenis_tagihan']?></td>
      <td><?php echo $row['nominal']?></td>
      <td><a href="file/<?php echo $row['bukti_transfer'] ?>">Download</a></td>
      <td>
        <a href="edit.php?kode=<?php echo $row['nomor_tagihan'] ?>">edit</a> |
        <a href="hapus.php?kode=<?php echo $row['nomor_tagihan']?>">hapus</a>
      </td>
    </tr>
    <?php 
    } 
    ?>
  </table>
</body>
</html>