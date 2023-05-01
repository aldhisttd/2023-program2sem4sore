<!DOCTYPE HTML>
<html>
    <head>
        <title>Tugas Dewi</title>
        <link rel="stylesheet" href="style.css">
    </head>
<style>
    *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    height: 100vh;
    background-color:#F7F9F9 ;
    background-size: cover;
    background-position: center;
    
}

.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;
    background-color: #7FB3D5  ;
   
}
.container h1{
    text-align: left;
    color: #FDFEFE;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #FDFEFE;
}
.container label{
    text-align: left;
    color:#FDFEFE;
}
.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #FDFEFE;
    font-size: 15px;
    color: #FDFEFE; 
}
.container form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#FDFEFE;
    font-size: 18px;
    color: #17202A ;
}
</style>
    <body>
        <div class="container">
          <h1>Login</h1>
            <form>
                <label>Username</label><br>
                <input type="text"><br>
                <label>Password</label><br>
                <input type="password"><br>
                <button>Log in</button>
            </form>
        </div>     
    </body>
</html>