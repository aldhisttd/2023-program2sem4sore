
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laptop</title>

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
    <h1> Data Laptop</h1>
    <a href="index.php">Tambah Data</a><br><br>

    <table>
        <tr>
            <th>Kode</th>
            <th>Tanggal Masuk</th>
            <th>Jenis</th>
            <th>Quantity</th>
            <th>Spesifikasi</th>
            <th>Gambar</th>
            <th>action</th>
        </tr>
        <?php
        include "koneksi.php";
        $data = mysqli_query($conn, "SELECT * FROM laptop");
        while ($row = mysqli_fetch_assoc($data)) {
        ?>
            <tr>
                <td><?php echo $row['kode']; ?></td>
                <td><?php echo $row['tanggal_masuk']; ?></td>
                <td><?php echo $row['jenis']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['spesifikasi']; ?></td>
                <td>
                    <img src="img/<?php echo $row['gambar']; ?>" width="150">
                </td>
                <td>
                    <a href="edit.php?kode=<?php echo $row['kode']; ?>">Edit</a> -
                    <a href="hapus.php?kode=<?php echo $row['kode']; ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                </td>
            </tr>
        <?php }; ?>

    </table>
</body>

</html>