<!DOCTYPE html>
<html>
<head>
    <title>Form Input Laptop Baru</title>
</head>
<body>
    <h1>Form Input Laptop Baru</h1>

    <?php
    if (isset($_POST['submit'])) {
        // Mengambil data dari form
        $merek = $_POST['merek'];
        $spec = $_POST['spec'];
        $harga = $_POST['harga'];

        // Mengunggah foto laptop
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
        move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile);

        // Menampilkan data yang diinputkan
        echo "<h2>Informasi Laptop:</h2>";
        echo "<p>Merek: " . $merek . "</p>";
        echo "<p>Spesifikasi: " . $spec . "</p>";
        echo "<p>Harga: " . $harga . "</p>";
        echo "<p>Foto: <img src='" . $targetFile . "'></p>";
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <label for="merek">Merek:</label>
        <input type="text" id="merek" name="merek" required><br><br>

        <label for="spec">Spesifikasi:</label><br>
        <textarea id="spec" name="spec" rows="5" cols="30" required></textarea><br><br>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" required><br><br>

        <label for="photo">Foto:</label>
        <input type="file" id="photo" name="photo" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
