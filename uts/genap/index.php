<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>

    <?php include 'component/menu.php' ?>

    <form action="proses/ex_data.php" method="POST" enctype="multipart/form-data">
        <label for="">ID</label>
        <input type="text" name="id">
        <br><br>
        
        <label for="">Nama</label>
        <input type="text" name="nama">
        <br><br>

        <label for="">Alamat</label>
        <br>
        <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
        <br><br>

        <label for="">Tanggal Lahir</label>
        <input type="date" name="tanggal">
        <br><br>

        <label for="">Photo</label>
        <input type="file" name="photo">
        <br><br>

        <button type="submit" name="btn-simpan">Simpan</button>
    </form>
</body>
</html>