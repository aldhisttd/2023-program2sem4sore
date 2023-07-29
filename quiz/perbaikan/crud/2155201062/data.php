<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #000;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <h1> Data</h1>
    <a href="index.php">Tambah Data</a><br><br>

    <table>
        <tr>
            <th>SN</th>
            <th>Tanggal Rilis</th>
            <th>Jenis</th>
            <th>Quantity</th>
            <th>Spesifikasi</th>
            <th>Gambar</th>
            <th>action</th>
        </tr>
        <?php
        include "koneksi.php";
        $data = mysqli_query($conn, "SELECT * FROM software");
        while ($row = mysqli_fetch_assoc($data)) {
        ?>
            <tr>
                <td><?php echo $row['sn']; ?></td>
                <td><?php echo $row['tanggal_rilis']; ?></td>
                <td><?php echo $row['jenis']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['spesifikasi']; ?></td>
                <td>
                    <img src="img/<?php echo $row['gambar']; ?>" width="200">
                </td>
                <td>
                    <a href="edit.php?sn=<?php echo $row['sn']; ?>">Edit</a> -
                    <a href="hapus.php?sn=<?php echo $row['sn']; ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                </td>
            </tr>
        <?php }; ?>

    </table>
</body>

</html> 