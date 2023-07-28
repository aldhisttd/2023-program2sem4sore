<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Form Data Pasien</h1>

    <form action="proses.php" method="POST">

        <label for="">NIK</label><br>
        <input type="text" name="nik">

        <br>

        <label for="">Nama Pasien</label> <br>
        <input type="text" name="nama">

        <br>

        <label for="">Jenis</label> <br>
        <select name="jenis">
            <option value="">-</option>
            <option value="bpjs">BPJS</option>
            <option value="umum">Umum</option>
            <option value="vip">VIP</option>

        </select>

        <br><br>

        <input type="submit" name="btn_submit" value="Simpan">

    </form>
    
</body>
</html>