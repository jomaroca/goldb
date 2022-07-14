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

    <?php session_start(); ?>

    <?php if (isset($_SESSION['id_usuario'])){
        $usuario = $_SESSION['id_usuario'];
        } if ($usuario['Enabled'] == 0){ // Si no esta autorizado no le permitimos entrar.        
            header('Location: ../../vista/loguear/login.php'); // Si no existe la sesión le redireccionamos al login.
            } 
    ?>

    <section class="" id="">
        <img class="btnMenu" src="../img/user.png" alt="Usuarios"></a> 
            <nav class="menu-navegacion">
            <span class="enlace"><?= $_SESSION['id_usuario']['Nombre'] ?></span>
                <a href="../../index.html#inicio">Inicio</a>
                <a href="../../index.html#equipos">Equipos</a>
                <a href="../../index.html#galeria">Galería</a>
                <a href="../../index.html#jugadores">Jugadores</a>
                <a href="../../index.html#contacto">Contacto</a>
            <a class="enlace" href="../../vista/loguear/logout.php">Cerrar sesión</a>
            </nav>
        </div>
    </section>
	
	<div class="btn-container">
    <form action="formUsuarios.php" method="POST">
		<input type="submit" class="btn btn-create" name="anyade" value="Crear">
	</form>
	
	<form action="listaUsuarios.php" method="GET">
		<input type="submit" class="btn btn-big" name="ordenar" value="Creciente">
		<input type="submit" class="btn btn-little" name="ordenar" value="Decreciente">
	</form>
    </div>

    <div class="table-container">
	<?php 

		include '../../controlador/mostrarDatos.php';

		// Si venimos de borrar, eliminamos el elemento antes de pintar.
		if (isset($_POST['borrar'])){
			borrarUsuarios($_POST['id']);
		}

		// Si venimos de ordenar, indicamos cómo debemos ordenar la lista.
		if (!isset($_GET['ordenar'])) {
			$orden = "Creciente";
		} else {
			$orden = $_GET['ordenar'];
		}

		pintaListaUsuarios($orden);
		
	?>
	</div>

	<a class="enlace" href="../administrador/administrador.php">Volver a Administrador</a><br>

	<script src="../js/menu.js"></script>
</body>
</html>