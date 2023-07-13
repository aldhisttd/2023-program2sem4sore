<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>
<body>

     <?php include "component/menu.php" ?>
    
    <form action="proses/ex_buku.php" method="POST" enctype="multipart/form-data">

        <label for="">ISBN</label>
        <input type="text" name="isbn">
        <br>

        <label for="">Judul</label>
        <input type="text" name="judul">
        <br>

        <label for="">Kategori</label>
        <select name="kategori" id="">
            <option value="novel">Novel</option>
            <option value="komik">Komik</option>
            <option value="kamus">Kamus</option>
        </select>
        <br>

        <label for="">stok</label>
        <input type="number" name="stok">
        <br>

        <label for="">File</label>
        <input type="file" name="pdf">
        <br><br>
        
        <button type="submit" name="btn-simpan">Simpan</button>

    </form>

</body>
</html>