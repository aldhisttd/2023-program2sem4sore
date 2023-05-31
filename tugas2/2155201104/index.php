<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Form Data Laptop Baru</title>
        <style>
            .title {
                text-align: center;
            }
            form {
                margin: auto;
                display: flex;
                flex-direction: column;
                width: 200px;
            }
            textarea {
                resize: none;
            }
        </style>
    </head>
    <body>
        <div class="title">
            <h1>Form Laptop Baru</h1>
        </div>
        <form action="proses.php" method="post" autocomplete="off" enctype="multipart/form-data">    
            <label for="merek">Merek</label>
            <input type="text" name="merek" id="merek" />
            <br />
            <label for="spec">Spesifikasi</label>
            <textarea name="spec" id="" cols="20" rows="3"></textarea>
            <br />
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" />
            <br />
            <label for="gambar">Foto</label>
            <input type="file" name="gambar" id="gambar" />
            <br />
            <input type="submit" name="btn_submit" value="Kirim" />
        </form>
    </body>
</html>
