<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laptop Baru</title>
</head>
<body>

    <h1>Form Data Laptop</h1>

    <form action="proses.php" method="POST">

        <label for="">Merk</label><br>
        <input type="text" name="merk">

        <br>

        <label for="">Spesifikasi</label> <br>
        <textarea id="spesifikasi" name="spesifikasi" rows="4" cols="50"></textarea>

        <br>

        <br><br>

        <label for="">Harga(Rp)</label> <br>
        <input type="number" id="" name="harga">

        <br><br>

        <label for="">Gambar</label> <br>
        <input type="file" id="" name="gambar">

        <br><br>

        <input type="submit" name="input" value="input">

    </form>
    
</body>