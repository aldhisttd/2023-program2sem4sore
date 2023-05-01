<!DOCTYPE html>
<html>
<head>
 <title>Login Form</title>
</head>
<style>
    body{
margin: 0;
padding: 0;
font-family: sans-serif;
background: url(bcgrd.jpg); 
background-repeat: no-repeat;
background-size: cover;
}

.box{
width: 300px;
padding: 40px;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
background: #191919;
text-align: center;
}

.box h1{
color: white;
text-transform: uppercase;
font-weight: 500;
}

.box input[type = "text"], .box input[type = "password"]{
border: 0;
background: none;
display: block;
margin: 20px auto;
text-align: center;
border: 2px solid #3498db;
padding: 14px 10px;
width: 200px;
outline: none;
color: white;
border-radius: 24px;
transition: 0.25s;
}

.box input[type = "text"]:focus,.box input[type = "password"]:focus{
width: 280px;
border-color: #2ecc71;
}

.box input[type = "submit"]
{
 border: 0;
background: none;
display: block;
margin: 20px auto;
text-align: center;
border: 2px solid #2ecc71;
padding: 14px 40px;
outline: none;
color: white;
border-radius: 24px;
transition: 0.25s;
cursor: pointer;
}

.box input[type = "submit"]:hover
{
background: #2ecc71;
}
</style>

<body>
<form class="box">
<h1>Login Here</h1>
<input type="text" name="" placeholder="Username">
<input type="password" name="" placeholder="Password">
<input type="submit" name="" value="Login">
</form>
</body>

</html>

