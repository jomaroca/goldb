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

	<?php include '../../controlador/mostrarDatos.php'; ?>

	<?php 
		// Si vengo de haber pulsado en editar.
		if (isset($_GET['editar'])){
			$id = $_GET['editar'];
			$datos = mysqli_fetch_assoc(getUsuarios($id));
			//echo $datos['Nombre'];
		} else {
		// Si vengo de otro lado.
			$id = "";
			$datos = [
				"Nombre" => "",
				"Email" => "",
				"Password" => "" ,
				"Enabled" => ""];
		}
	?>

	<form class="form" action="formUsuarios.php" method="POST">
		<?php // Incluyo los valores por defecto si estoy editando. ?>
		<h2 class="title">Usuario</h2>
		<label class="title">Nombre: </label><input type="text" class="field" name="nombre" value="<?php echo $datos["Nombre"]; ?>">
		<label class="title">Email: </label><input type="email" class="field" name="email" value=<?php echo $datos["Email"]; ?>>
		<label class="title">Contraseña: </label><input type="password" class="field" name="password" value=<?php echo $datos["Password"]; ?>>
		<label class="title">Autorizado: </label><br><br>                
        <label>Sí</label>  
        <input type="radio" name="enabled" id="enabled" value="1" <?php if ($datos['Enabled']=='1') echo 'checked';?>>                                                              
        <label>No</label>
        <input type="radio" name="enabled" id="enabled" value="0" <?php if ($datos['Enabled']=='0') echo 'checked';?>>
		<?php // Paso el ID para saber que lo que estoy haciendo es editar un elemento. ?>
		<input type="hidden" name='id' value=<?php echo $id; ?>>
		<input type="submit" class="btn btn-blue" name="Añadir">
	</form>
	
	<a class="enlace" href="../administrador/listaUsuarios.php">Volver a Usuarios</a><br><br>

	<script src="../js/menu.js"></script>
</body>
</html>

	<?php

		// Datos de Usuarios.
		if(!empty($_POST['nombre']) && !empty($_POST['email'])){
		$nombreUsuarios = $_POST['nombre']; // Nombre nuevo usuario.
		$email = $_POST['email'];  
		$password = $_POST['password'];
		$enabled = $_POST['enabled'];  

		// Actualizo las funciones para establecer los valores por defecto.
		if (isset($_POST['id'])) {
			$id = $_POST['id'];
			if ($id > 0) {
				// Si ID vale algo, estoy modificando.
				if (modificarUsuarios($id, $nombreUsuarios, $email, $password, $enabled)) {
					echo "<h2>Se ha modificado el usuario:</h2>";
					echo "<h3>" . $nombreUsuarios . "</h3>";
					//echo "<p>" . $email . "</p>";
					//echo "<p>" . $password . "</p>";
					//echo "<p>" . $enabled . "</p>";
				} else {
					echo "No se ha podido modificar<br>";
				}
			// Si ID no vale nada, estoy añadiendo.
			} else if (anadirUsuarios($nombreUsuarios, $email, $password, $enabled)) {
				echo "<h2>Se ha añadido el nuevo usuario:</h2>";
				echo "<h3>" . $nombreUsuarios . "</h3>";
				//echo "<p>" . $email . "</p>";
				//echo "<p>" . $password . "</p>";
				//echo "<p>" . $enabled . "</p>";
			} else {
				echo "No se ha podido añadir<br>";
			}
		}
	}

	?>