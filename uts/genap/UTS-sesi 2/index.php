<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php include "component/menu.php" ?>

    <form action="proses/ex_barang.php" method="POST" enctype="multipart/form-data">

        <label for="">Kode</label>
        <input type="text" name="kode">
        <br>

        <label for="">Brand</label>
        <select name="brand" id="">
            <option value="lenovo">Lenovo</option>
            <option value="asus">Asus</option>
            <option value="acer">Acer</option>
        </select>
        <br>
        <label for="">Tipe</label>
        <input type="text" name="tipe">
        <br>

        <label for="">Harga</label>
        <input type="number" name="harga">
        <br>

        <label for="">Brosur</label>
        <input type="file" name="gambar">
        <br><br>

        <button type="submit" name="btn-simpan">Simpan</button>

    </form>

</body>

</html>