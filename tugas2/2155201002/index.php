<!DOCTYPE html>
<html>
<head>
    <title>Form Data Laptop Baru</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Form Data Laptop Baru</h2>
    <form action="proses_form.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="merek">Merek:</label>
            <input type="text" name="merek" id="merek" required>
        </div>
        <div class="form-group">
            <label for="spesifikasi">Spesifikasi:</label>
            <textarea name="spesifikasi" id="spesifikasi"></textarea>
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" name="harga" id="harga" required>
        </div>
        <div class="form-group">
            <label for="file">Foto:</label>
            <input type="file" name="file" id="file" required>
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
