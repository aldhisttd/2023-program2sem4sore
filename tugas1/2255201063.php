<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div class="container">
          <h1>Login</h1>
            <form method="POST" action="../index.php">

                <!-- tipe hidden tidak akan tampil pada website --> 
                <input name="tujuan" type="hidden" value="LOGIN" >

                <label>Username</label>
                <br>
                <input name="username" type="text">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>

                <button>Log In</button>
                
                <p> Belum punya akun?
                  <a href="daftar.php">Daftar di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>