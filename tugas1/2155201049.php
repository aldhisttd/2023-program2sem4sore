<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Tugas 1 Siti Nadhila | Login</title>
</head>
<style>
    {
        font family: 'Poppins', sans serif;
    }
    body{
        background-color: #778899;
        background-size: cover;
        background-position: center;
    }
    .box{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 90vh;
    }
    .container{
    width: 350px;
    display: flex;
    flex-direction: column;
    padding: 0 15px 0 15px;
    }
    span{
    color: #fff;
    font-size: small;
    display: flex;
    justify-content: center;
    padding: 10px 0 10px 0;
    }
    header{
    color: #fff;
    font-size: 30px;
    display: flex;
    justify-content: center;
    padding: 10px 0 10px 0;
    }
    .input-field .input{
    height: 45px;
    width: 87%;
    border: none;
    border-radius: 30px;
    color: #fff;
    font-size: 15px;
    padding: 0 0 0 45px;
    background: rgba(255,255,255,0.1);
    outline: none;
    }
    i{
    position: relative;
    top: -33px;
    left: 17px;
    color: #fff;
    }
    ::-webkit-input-placeholder{
    color: #fff;
    }
    .submit{
    border: none;
    border-radius: 30px;
    font-size: 15px;
    height: 45px;
    outline: none;
    width: 100%;
    color: black;
    background: rgba(255,255,255,0.7);
    cursor: pointer;
    transition: .3s ;
    }
    .submit:hover{
    box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
    }
</style>
<body>
   <div class="box">
    <div class="container">
        <div class="top">
        </div>
        <div class="input-field">
            <input type="text" class="input" placeholder="Username" id="">
            <i class='bx bx-user' ></i>
        </div>
        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" id="">
            <i class='bx bx-lock-alt'></i>
        </div>
        <div class="input-field">
            <input type="submit" class="submit" value="Login" id="">
        </div>
</body>
</html>