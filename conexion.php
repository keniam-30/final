<?php
 session_start(); 
class Conexion
{
    function conectar()
    {
        $conexion = null;
        try {
            //direccion de la conexion con la base de datos
            $conexion = new PDO("mysql:host=sql5.freemysqlhosting.net;dbname=formularios","sql5498382","z8GkPJI49i");
            // set the PDO error mode to exception
            $conexion->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $conexion;
    }
    function showLogin($username, $password, $conexion)
    { 
        try {
            $sql = "SELECT * FROM login WHERE username= '$username' and password = '$password'"; 
            $stmt = $conexion->query($sql);
            $arreglo = $stmt->fetch();
            if ($arreglo) {
                $_SESSION['username'] = $arreglo['username'];
            } else {
                echo "Revise el usuario o la contraseña";
            }
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
}

}
