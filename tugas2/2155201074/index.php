<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Laptop</title>
</head>
<body>
    <h1>Data Laptop Baru</h1>
    <form action="proses.php" method="post" enctype="multipart/form-data">
        <label for="">Merek Laptop</label>
        <br>
        <input type="text" name="merek">
        <br><br>
        
        <label for="">Spesifikasi Laptop</label>
        <br>
        <textarea name="spek" id="spek" cols="30" rows="10"></textarea>
        <br><br>

        <label for="">Harga Laptop</label>
        <br>
        <input type="number" placeholder="Rp." name="harga">
        <br><br>
        
        <label for="">Upload Gambar Laptop</label>
        <br><br>
        <input type="file" name="gambar" id="gambar">
        <br><br>
        
        <input type="submit" name="btn_submit" value="Submit">
</form>
</body>
</html>