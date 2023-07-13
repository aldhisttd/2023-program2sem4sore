
<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>id</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td><textarea name="alamat"></td>
            </tr>
            <tr> 
                <td>tgllahir</td>
                <td><input type="datetime-local"></td>
            </tr>
            <tr> 
                <td>photo</td>
                <td> <input type="file" name="foto"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>
