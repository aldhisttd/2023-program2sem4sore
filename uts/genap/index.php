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

        <label for="">Kode Brand</label>
        <input type="text" name="kdbrand">
        <br>

        <label for="">Nama Brand</label>
        <select name="namabrand" id="">
            <option value="asus">asus</option>
            <option value="hp">HP</option>
            <option value="lenovo">LENOVO</option>
        </select>
        <br>
        <label for="">Tipe Brand</label>
        <input type="text" name="tipe">
        <br>

        <label for="">Harga</label>
        <input type="number" name="hrg">
        <br>

        <label for="">Browsur</label>
        <input type="file" name="gbr">
        <br><br>
        
        <button type="submit" name="btn-simpan">Simpan</button>

    </form>

</body>
</html>