<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex_buku.php" method="POST" enctype="multipart/form-data">
     <table>
        <tr>
        <td><label> isbn</label></td>
        <td><input type="text" name="isbn"></td>
        </tr>
        
        <tr>
            <td><label >judul</label> </td>
            <td><input type="text" name="judul"> </td>
        </tr>
        
        <tr>
            <td><label >kategori</label></td>
            <td><input type="text" name="kategori"></td>
        </tr>
        
        <tr>
            <td><label >stok</label></td>
            <td><input type="text" name="stok"></td>
        </tr>
        <tr>
            <td><label >file</label></td>
            <td><input type="file" name="doc"></td>
        </tr>
        <tr>
            <td><input type="submit" name="simpan"></td>
        </tr>
        

     </table>
        

    </form>
</body>
</html>