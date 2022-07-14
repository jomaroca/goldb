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
	<div class="table-container">
	<?php 
		
		include '../../controlador/mostrarDatos.php';

		pintaListaEquiposMad();

		pintaListaJugadoresMad();

		pintaListaEntrenadoresMad();
		
	?>
	</div>

	<a class="enlace" href="../../index.html#equipos">Volver a Equipos</a>
	
</body>
</html>