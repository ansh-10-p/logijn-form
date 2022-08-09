<?php
$servername = "localhost";
$username = "username";
$password = "password";
$db = "demo";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>



<!DOCTYPE html>
<html>

<head>
    <title> Login Form </title>
    <link rel="stylesheet" a href="style.css">
    <style>
        body{
	margin: 0 auto;
	background-image: url("1.jpg");
	background-repeat: no-repeat;
	background-size: 100% 720px;
}

.container{
	width: 500px;
	height: 450px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(2, 243, 207, 0.7);
	margin-top: 160px;
}

.container img{
	width: 150px;
	height: 150px;
	margin-top: -60px;
}

input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}

.form-input::before{
	content: ".";
	font-family: "FontAwesome";
	padding-left: 07px;
	padding-top: 40px;
	position: absolute;
	font-size: 35px;
	color: #2980b9; 
}

.form-input:nth-child(2)::before{
	content: ".";
}

.btn-login{
	padding: 15px 25px;
	border-radius: 10px;
	border: none;
	background-color: #109d4b;
	color: #fff;
}
        </style>   
</head>

<body>
    <div class="container">
        <img src="10 (1).jpg" />
        <form>
            <div class="form-input">
                <input type="text" name="text" placeholder="Enter the User Name" />
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="password" />
            </div>
            <input type="submit" type="submit" value="LOGIN" class="btn-login" />

    </div>
</body>

</html>