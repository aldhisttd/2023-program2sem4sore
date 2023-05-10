<!DOCTYPE html>
<html> 
    </head>
    <body>
        <h2>Form Input Data Mahasiswa </h2>
         <form method="post" action="simpan.php">
         <input type="hidden" value="<?php echo $data['id'];?>" name="id_mahasiswa">
            <table>
                <tr><td>NIM : </td><td><input type="text" name="nim"></td></tr>
                <tr><td>Nama :</td><td><input type="text" name="nama"></td></tr>
                <tr><td>Jenis Kelamin</td><td>
                        <input type="radio" name="jenis_kelamin" value="L" checked>Laki Laki
                        <input type="radio" name="jenis_kelamin" value="P">Perempuan
                    </td></tr>
 
            <!--Tanggal Lahir -->
            <tr>
              <td>Tanggal Lahir :</td>
              <td><select name="tgl" size="1" id="tgl">
            <?php
             for ($i=1;$i<=31;$i++)
             {
               echo "<option value=".$i.">".$i."</option>";
             }
            ?>
             
            </select>
                <select name="bln" size="1" id="bln">
            <?php
             $bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
             for ($i=1;$i<=12;$i++)
             {
               echo "<option value=".$i.">".$bulan[$i]."</option>";
             }
            ?>            
            </select>
             
            <select name="thn" size="1" id="thn">
            <?php
             for ($i=1980;$i<=2010;$i++)
             {
               echo "<option value=".$i.">".$i."</option>";
             }
            ?>
              </select></td>
                <tr><td>Jurusan :</td><td>
                        <select name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                        </select>
                    </td></tr>

            </td></tr>
 
            <tr><td colspan="2"><button type="submit" value="simpan">Submit</button></td></tr>
            </table>
        </form>
     </body>
</html>