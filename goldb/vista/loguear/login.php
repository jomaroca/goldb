<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GolDB</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body id="body">

    <form class="form" action="login.php" method="POST">
        <h1 class="title">Login</h1>
        
        <label for="email" class="title">Email:</label>
        <input type="email" class="field" name="Email" placeholder="Introduce tu email">
        <label for="password" class="title">Contraseña:</label>
        <input type="password" class="field" name="Password" placeholder="Introduce tu contraseña">
        
        <input type="submit" class="btn btn-blue" value="Iniciar sesión">
        
        <a href="singup.php">Registrarse</a>    
    </form>

</body>
</html>

<?php

require_once '../../modelo/manejoDatos.php';

session_start();

getAcceso();

getSesion();

?>