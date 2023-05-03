<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 1 - FORM</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: sans-serif;
            background: linear-gradient(to right, #b190ba, #e8b595);
            color: #5a166d;
        }

        .container {
            height: 100vh;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container .form-box {
            background-color: rgba(255, 255, 255, 0.25);
            width: 400px;
            height: 500px;
            border-radius: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container .form-box form input {
            display: block;
            margin-bottom: 25px;
            margin-top: 3px;
            border: 1px solid #5a166d;
            border-radius: 10px;
            padding: 0 10px;
            height: 33px;
            width: 250px;
        }

        .container .form-box form button {
            width: 250px;
            height: 35px;
            background-color: #e9a67c;
            color: #fff;
            border: none;
            border-radius: 100px;
            font-size: 16px;
        }
        .container .form-box form button:hover {
            background-color: #ec9e6d;
        }

        .container .form-box h1 {
            font-size: 50px;
            margin-top: 45px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1>FORM</h1>
            <form action="">
                <div class="username">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="password">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="tombol">
                    <button type="submit">Log in</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>