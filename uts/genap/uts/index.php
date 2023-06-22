<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses/ex_brand.php" method="POST" enctype="multipart/form-data">

    <label >kode</label>
    <input type="text" name="kdbrg"></input>
    <br><br>

    <label>brand</label>
    <select name="brand" name="brand">
    <option value="brand">brand</option>
    <option value="asus">asus</option>
    <option value="acer">acer</option>
    </select>
    <br><br>

    <label >tipe</label>
    <input type="text" name="tipe"></input>
    <br><br>

    <label >harga</label>
    <input type="text" name="harga"></input>
    <br><br>

    <label >brosur</label>
        <input type="file" name="gbr">
        <br><br>


    <button type="submit" name="btn-simpan">Simpan</button>



    </form>
    


</body>
</html>