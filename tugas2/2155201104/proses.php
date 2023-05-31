<?php
$target_dir="uploaded/";
$target_file=$target_dir.basename($_FILES["gambar"]["name"]);
$uploadOk=1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST['btn_submit'])){
    $vMerek=$_POST['merek'];
    $vSpec=$_POST['spec'];
    $vHarga=$_POST['harga'];

    echo "Merek : ".$vMerek."<br>";
    echo "Spesifikasi : ".$vSpec."<br>";
    echo "Harga : ".$vHarga."<br>";
    echo "Gambar : <br>";
}else{
    header('location:index.php');
}

if($uploadOk==0){
  echo "File belum di upload";
}else{
  if(move_uploaded_file($_FILES["gambar"]["tmp_name"],$target_file)){
    echo "<img src='$target_file' width='350' height='auto'>";
  }
}
echo "<br><br>";
echo "<a href='index.php'>Kembali ke form</a>";
?>

