<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
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
    <h2> hasil data <h2>
        <table>
        <tr>
              <th>kode</th>
              <th>brand</th>
              <th>tipe</th>
              <th>harga</th>
              <th>brosur</th>
         </tr>

        <?php
        include "koneksi.php";

        $data = mysqli_query($koneksi,"SELECT * FROM tb_brand");
        while($row = mysqli_fetch_array($data)){
            ?>
                <tr>
                  <td><?php echo $row['kode'] ?></td>
                    <td><?php echo $row['brand'] ?></td>
                    <td><?php echo $row['tipe'] ?></td>
                    <td><?php echo $row['harga'] ?></td>
                    <td>
                        <img src="gambar/<?php echo $row['brosur'] ?>" width="100"></img>
                    </td>
                    <td>
                        <a href="hapus.php?kode=<?php echo $row['kode'] ?>">Hapus</a> - 
                        <a href="edit.php?kode=<?php echo $row['kode'] ?>">Edit</a>
                    </td>
                </tr>
        
            <?php
            }
            
        ?>

        </table>
</body>
</html>