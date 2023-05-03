<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <title>Tugas 1</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&family=Roboto+Slab:wght@300&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #1f293a;
        }

        .login-box{
            position: relative;
            width: 400px;
            /* background: red; */
        }

        .login-box form{
            width: 100%;
            padding: 0 50px;
        }

        h2{
            font-size: 2em;
            color: #0ef;
            text-align: center;
        }

        .input-box{
            position: relative;
            margin: 25px 0;
        }

        .input-box input{
            width: 100%;
            height: 50px;
            background: transparent;
            border: 2px solid #2c4766;
            border-radius: 40px;
            font-size: 1em;
            color: #fff;
            padding: 10px 30px;
            outline: none;
        }

        .input-box label{
            position: absolute;
            top: 25%;
            left: 30px;
            transform: translatedY(-50%);
            font-size: 1em;
            color: #fff;
            transition: .5s ease;
            pointer-events: none;
           
        }

        .input-box input:focus~label,
        .input-box input:valid~label{
            top: 0px;
            font-size: .8em;
            background: #1f293a;
            padding: 0 6px;
            color: #0ef;
        }

        .forgot-pass{
            margin: -15px 0 10px;
            text-align: center;
        }

        .forgot-pass a{
            font-size: .85em;
            color: #fff;
        }

        .forgot-pass a:hover{
            text-decoration: underline;
        }

        .btn{
            width: 100%;
            height: 45px;
            background: #0ef;
            border: none;
            border-radius: 40px;
            cursor: pointer;
            font-size: 1em;
            color: #1f293a;
            font-weight: 600;
        }

    </style>
</head>

<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="">
            <div class="input-box">
                <input type="text" required="">
                <label>Username</label>
            </div>
            <div class="input-box">
                <input type="password" required="">
                <label>Password</label>
            </div>
            <div class="forgot-pass">
                <a href="a">Forgot Your Password?</a>
            </div>
            <button type="submit" class="btn">Login</button>

        </form>
    </div>
</body>
</html>