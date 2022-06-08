<?php
require_once "conexion.php";

$conexion = new Conexion();
$returnDB = $conexion->conectar();

if(!empty($_SESSION)){
    header('Location: final_T.php');
    exit;
}

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $logueado = $conexion->showLogin($username, $password, $returnDB);

    if(!empty($_SESSION)){
        header('Location: final_T.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style type="text/css">

    .login-box{

width: 100px;
height: 100px;
border-radius: 50%;
position: absolute;
top: 50px;
left: 10px;
left: calc(36% - 45px);
}
.lef{
width: 100px;
height: 100px;
border-radius: 50%;
position: absolute;
top: 50px;
left: 10px;
left: calc(45% - 45px);
}
.righ{

background-position: right;
position: absolute;
}
* {
	padding: 0;
	margin: 0;
	font-family: century gothic;
	text-align: center;
}

form {
	padding: 50px 20px;
	background-color: #381b1ba6;
	margin: calc(25% + 100px);
	margin-top: 70px;
	padding-top: 28px;
	margin-bottom: 30px
}

h1 {
	text-align: center;
	padding: 12px;
	color: rgb(206, 203, 203)
}

input {
	width: calc(100% - 20px);
	padding: 9px;
	margin: auto;
	margin-top: 12px;
	font-size: 16px
}

input[type='submit']{
	background-color: #48e;
	color: #fff;
	width: calc(80% - 20px);
	margin: 0 10%;
	margin-top: 22px;
	border: none;

}


.ok {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #1e6;
	color: #fff
}
.bad {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #a22;
	color: #fff
}
.off{
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: rgb(0, 0, 0);
	color: #fff

}
body{
	background-image:url(../IMG/fondolegal.jpg);
	width: 100%;
	height:100%vh;
	background-size: cover;

	color:white;

}
.mensaje{
	width: 100%;
	max-width: 350px;
	margin: auto;
	margin-top: 20px;
	text-align: left;
	padding: 6px;
	color: red;

}
h6 {
	text-align: center;
	padding: 12px;
    color: rgb(206, 203, 203);
    line-height: 20px;
}
.gabo{
	padding: 50px 20px;
	background-color: #381b1ba6;
	margin: calc(25% + 100px);
	margin-top: 70px;
	padding-top: 28px;
    margin-bottom: 30px;
    line-height: 20px;
}
header{
    width: 100%;
    color: #fff;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    align-content: space-between;
    background-color: rgba(0, 0, 0,.3);
}
header h1{
    margin-left: 5px;
    align-items: center;
    width: calc(20% - 100px);
    font-family: montez;
    font-size: 55px;
}
header a{
    margin-right: 30px;
    text-align: center;
    text-decoration: none;
    color: #fff;
    font-size: 25px;
    transition: all ease 300ms;
}
.login-box{
	background-image:url(../IMG/logogae.png);
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);
}
</style>
</head>

<body>
    <h1> Login here </h1>
    <form action="login.php" method="post">

        <label for="">username</label>
        <input type="text" name="username" id="">
        <label for="">Password</label>
        <input type="password" name="password" id="">
        <input type="submit" value="Send" />
    </form>
</body>

</html>