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
			$datos = mysqli_fetch_assoc(getJugadores($id));
			//echo $datos['Nombre'];
		} else {
		// Si vengo de otro lado.
			$id = "";
			$datos = [
				"Nombre" => "",
				"Posición" => "",
				"Edad" => "" ,
				"Partidos" => "",
				"Goles" => "" ,
				"ID_equipo" => ""];
		}
	?>

	<form class="form" action="formJugadores.php" method="POST">
		<?php // Incluyo los valores por defecto si estoy editando. ?>
		<h2 class="title">Jugador</h2>
		<label class="title">Nombre: </label><input type="text" class="field" name="nombre" value="<?php echo $datos["Nombre"]; ?>">
		<label class="title">Posición: </label><input type="text" class="field" name="posición" value="<?php echo $datos["Posición"]; ?>">
		<label class="title">Edad: </label><input type="number" class="field" name="edad" value=<?php echo $datos["Edad"]; ?>>
		<label class="title">Partidos: </label><input type="number" class="field" name="partidos" value=<?php echo $datos["Partidos"]; ?>>
		<label class="title">Goles: </label><input type="number" class="field" name="goles" value=<?php echo $datos["Goles"]; ?>>
		<label class="title">ID Equipo: </label><input type="number" class="field" name="id_equipo" value=<?php echo $datos["ID_equipo"]; ?>>
		<?php // Paso el ID para saber que lo que estoy haciendo es editar un elemento. ?>
		<input type="hidden" name='id' value=<?php echo $id; ?>>
		<input type="submit" class="btn btn-blue" name="Añadir">
	</form>
	
	<a class="enlace" href="../administrador/listaJugadores.php">Volver a Jugadores</a><br><br>

	<script src="../js/menu.js"></script>
</body>
</html>

	<?php

		// Datos de Jugadores.
		if(!empty($_POST['nombre'])){
		$nombreJugadores = $_POST['nombre']; // Nombre nuevo jugador.
		$posicion = $_POST['posición'];  
		$edad = $_POST['edad'];
		$partidos = $_POST['partidos'];  
		$goles = $_POST['goles'];
		$id_equipo = $_POST['id_equipo'];  

		// Actualizo las funciones para establecer los valores por defecto.
		if (isset($_POST['id'])) {
			$id = $_POST['id'];
			if ($id > 0) {
				// Si ID vale algo, estoy modificando.
				if (modificarJugadores($id, $nombreJugadores, $posicion, $edad, $partidos, $goles, $id_equipo)) {
					echo "<h2>Se ha modificado el jugador:</h2>";
					echo "<h3>" . $nombreJugadores . "</h3>";
					//echo "<p>" . $posicion . "</p>";
					//echo "<p>" . $edad . "</p>";
					//echo "<p>" . $partidos . "</p>";
					//echo "<p>" . $goles . "</p>";
					//echo "<p>" . $id_equipo . "</p>";
				} else {
					echo "No se ha podido modificar<br>";
				}
			// Si ID no vale nada, estoy añadiendo.
			} else if (anadirJugadores($nombreJugadores, $posicion, $edad, $partidos, $goles, $id_equipo)) {
				echo "<h2>Se ha añadido el nuevo jugador:</h2>";
				echo "<h3>" . $nombreJugadores . "</h3>";
				//echo "<p>" . $posicion . "</p>";
				//echo "<p>" . $edad . "</p>";
				//echo "<p>" . $partidos . "</p>";
				//echo "<p>" . $goles . "</p>";
				//echo "<p>" . $id_equipo . "</p>";
			} else {
				echo "No se ha podido añadir<br>";
			}
		}
	}

	?>