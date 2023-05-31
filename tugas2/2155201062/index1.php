<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laptop Baru</title>
</head>
<body>
    <h1>Input Data Laptop</h1>
    <form action="submit.php" method="post" enctype="multipart/form-data">
        <label for="">Merk Laptop</label><br>
        <input type="text" name="merk">
        <br><br>
        <label for="">Spesifikasi Laptop</label><br>
        <textarea id="" name="spek" rows="4" cols="50"></textarea>
        <br><br>
        <label for="">Harga Laptop</label><br>
        <input type="number" id="" name="harga">
        <br><br>
        <label for="">Foto Laptop</label><br>
        <input type="file" id="" name="photo">
    
        <br><br>
        <input type="submit" name="input" value="Input">
    </form>
</body>
</html>
