<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tgllahir=$_POST['tgllahir'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET nama='$nama',id='$id',tgllahir='$tgllahir' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $alamat = $user_data['alamat'];
    $tgllahir = $user_data['tgllahir'];
    $photo = $user_data['photo'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
        <tr> 
                <td>id</td>
                <td><input type="text" name="id" value=<?php echo $id;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td>tgllahir</td>
                <td><input type="text" name="tgllahir" value=<?php echo $tgllahir;?>></td>
            </tr>
            <tr> 
                <td>photo</td>
                <td> <input type="file" name="foto" value=<?php echo $photo;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
