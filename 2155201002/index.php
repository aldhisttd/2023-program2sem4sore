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

        <label for="">ISBN</label>
        <input type="text" name="fisbn">
        <br>

        <label for="">Judul</label>
        <input type="text" name="fjudul">
        <br>

        <label for="">Kategori</label>
        <select name="fkategori" id="">
            <option value="novel">Novel</option>
            <option value="komik">Komik</option>
            <option value="kamus">Kamus</option>
        </select>
        <br>

        <label for="">Stok</label>
        <input type="number" name="fstok">
        <br>

        <label for="">File Ebook</label>
        <input type="file" name="febook">
        <br><br>
        
        <button type="submit" name="btn-simpan">Simpan</button>

    </form>

</body>
</html>