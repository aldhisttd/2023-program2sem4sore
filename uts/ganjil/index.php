<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="proses/ex_data.php" method="POST" enctype="multipart/form-data">

    <label for="">ID</label>
    <input type="text" name="id">
    <br>

    <label for="">Nama</label>
    <input type="text" name="nama">
    <br>

    <label for="">Alamat</label>
    <textarea name="alamat">
    <br>

    <label for="">tgl_lahir</label>
    <input type="date" name="tgl">
    <br>

    <label for="">Photo</label>
    <input type="file" name="photo">
    <br><br>

    <button type="submit" name="btn-simpan" >Simpan</button>

    </form>

</body>
</html>