<?php 
	
	include "../../modelo/manejoDatos.php";

	// Lista de Barcelona

	function pintaListaEquiposBar() {
		$datos = getListaEquiposBar();
		// Si hemos recibido un mensaje de error lo mostramos.
		if (is_string($datos)) {
			echo $datos;

		// Si hemos recibido datos
		} else {
			// Construimos la tabla
			echo "<table>\n 
					<tr>\n
						<th>Equipo</th>\n
						<th>Temporada</th>\n
					</tr>\n";
			
			// Obtenemos cada una de las filas de datos que nos devolvió la consulta.
			// mysqli_fetch_assoc avanza entre cada uno de los elementos del array que contiene cada vez que se llama, hasta que no haya más, por eso se puede usar en un while.
			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Temporada"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaListaJugadoresBar() {
		$datos = getListaJugadoresBar();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Jugadores</th>\n
						<th>Posición</th>\n
						<th>Edad</th>\n
						<th>Partidos</th>\n
						<th>Goles</th>\n
					</tr>\n";
					
			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Posición"] . "</td>\n
						<td>" . $fila["Edad"] . "</td>\n
						<td>" . $fila["Partidos"] . "</td>\n
						<td>" . $fila["Goles"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaListaEntrenadoresBar() {
		$datos = getListaEntrenadoresBar();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Entrenador</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	// Lista de Madrid

	function pintaListaEquiposMad() {
		$datos = getListaEquiposMad();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Equipo</th>\n
						<th>Temporada</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Temporada"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaListaJugadoresMad() {
		$datos = getListaJugadoresMad();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Jugadores</th>\n
						<th>Posición</th>\n
						<th>Edad</th>\n
						<th>Partidos</th>\n
						<th>Goles</th>\n
					</tr>\n";
					
			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Posición"] . "</td>\n
						<td>" . $fila["Edad"] . "</td>\n
						<td>" . $fila["Partidos"] . "</td>\n
						<td>" . $fila["Goles"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaListaEntrenadoresMad() {
		$datos = getListaEntrenadoresMad();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Entrenador</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	// Lista de Milan

	function pintaListaEquiposMil() {
		$datos = getListaEquiposMil();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Equipo</th>\n
						<th>Temporada</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Temporada"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaListaJugadoresMil() {
		$datos = getListaJugadoresMil();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Jugadores</th>\n
						<th>Posición</th>\n
						<th>Edad</th>\n
						<th>Partidos</th>\n
						<th>Goles</th>\n
					</tr>\n";
					
			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Posición"] . "</td>\n
						<td>" . $fila["Edad"] . "</td>\n
						<td>" . $fila["Partidos"] . "</td>\n
						<td>" . $fila["Goles"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaListaEntrenadoresMil() {
		$datos = getListaEntrenadoresMil();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Entrenador</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	// Lista de Juventus

	function pintaListaEquiposJuv() {
		$datos = getListaEquiposJuv();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Equipo</th>\n
						<th>Temporada</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Temporada"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaListaJugadoresJuv() {
		$datos = getListaJugadoresJuv();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Jugadores</th>\n
						<th>Posición</th>\n
						<th>Edad</th>\n
						<th>Partidos</th>\n
						<th>Goles</th>\n
					</tr>\n";
					
			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Posición"] . "</td>\n
						<td>" . $fila["Edad"] . "</td>\n
						<td>" . $fila["Partidos"] . "</td>\n
						<td>" . $fila["Goles"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaListaEntrenadoresJuv() {
		$datos = getListaEntrenadoresJuv();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Entrenador</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	// Lista de Manchester

	function pintaListaEquiposMan() {
		$datos = getListaEquiposMan();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Equipo</th>\n
						<th>Temporada</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Temporada"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaListaJugadoresMan() {
		$datos = getListaJugadoresMan();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Jugadores</th>\n
						<th>Posición</th>\n
						<th>Edad</th>\n
						<th>Partidos</th>\n
						<th>Goles</th>\n
					</tr>\n";
					
			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Posición"] . "</td>\n
						<td>" . $fila["Edad"] . "</td>\n
						<td>" . $fila["Partidos"] . "</td>\n
						<td>" . $fila["Goles"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaListaEntrenadoresMan() {
		$datos = getListaEntrenadoresMan();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Entrenador</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	// Lista de Liverpool

	function pintaListaEquiposLiv() {
		$datos = getListaEquiposLiv();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Equipo</th>\n
						<th>Temporada</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Temporada"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaListaJugadoresLiv() {
		$datos = getListaJugadoresLiv();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Jugadores</th>\n
						<th>Posición</th>\n
						<th>Edad</th>\n
						<th>Partidos</th>\n
						<th>Goles</th>\n
					</tr>\n";
					
			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Posición"] . "</td>\n
						<td>" . $fila["Edad"] . "</td>\n
						<td>" . $fila["Partidos"] . "</td>\n
						<td>" . $fila["Goles"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaListaEntrenadoresLiv() {
		$datos = getListaEntrenadoresLiv();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Entrenador</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	// Lista de Munich

	function pintaListaEquiposMun() {
		$datos = getListaEquiposMun();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Equipo</th>\n
						<th>Temporada</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Temporada"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaListaJugadoresMun() {
		$datos = getListaJugadoresMun();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Jugadores</th>\n
						<th>Posición</th>\n
						<th>Edad</th>\n
						<th>Partidos</th>\n
						<th>Goles</th>\n
					</tr>\n";
					
			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Posición"] . "</td>\n
						<td>" . $fila["Edad"] . "</td>\n
						<td>" . $fila["Partidos"] . "</td>\n
						<td>" . $fila["Goles"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaListaEntrenadoresMun() {
		$datos = getListaEntrenadoresMun();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Entrenador</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	// Lista de Ajax

	function pintaListaEquiposAja() {
		$datos = getListaEquiposAja();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Equipo</th>\n
						<th>Temporada</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Temporada"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaListaJugadoresAja() {
		$datos = getListaJugadoresAja();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Jugadores</th>\n
						<th>Posición</th>\n
						<th>Edad</th>\n
						<th>Partidos</th>\n
						<th>Goles</th>\n
					</tr>\n";
					
			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Posición"] . "</td>\n
						<td>" . $fila["Edad"] . "</td>\n
						<td>" . $fila["Partidos"] . "</td>\n
						<td>" . $fila["Goles"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaListaEntrenadoresAja() {
		$datos = getListaEntrenadoresAja();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Entrenador</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	// Listas máximos goleadores

	function pintaListaMaxGoleadores() {
		$datos = getListaMaxGoleadores();
		if (is_string($datos)) {
			echo $datos;
		} else {
			echo "<table>\n 
					<tr>\n
						<th>Jugadores</th>\n
						<th>Posición</th>\n
						<th>Edad</th>\n
						<th>Partidos</th>\n
						<th>Goles</th>\n
					</tr>\n";
					
			while ($fila = mysqli_fetch_assoc($datos)) {
				echo "<tr>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Posición"] . "</td>\n
						<td>" . $fila["Edad"] . "</td>\n
						<td>" . $fila["Partidos"] . "</td>\n
						<td>" . $fila["Goles"] . "</td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	// Listas de equipos

	function pintaListaEquipos($orden) {
		$datos = getListaEquipos($orden);

		if (is_string($datos)) {
			echo $datos;

		} else {
			echo "<table>\n 
					<tr>\n
						<th>ID Equipo</th>\n
						<th>Nombre</th>\n
						<th>Temporada</th>\n
						<th>¿Editar?</th>\n
						<th>¿Eliminar?</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				// Añado el boton de editar como un enlace. "Fuerzo a que se convierta en un método GET y paso el ID..
				echo "<tr>\n
						<td>" . $fila["ID_equipo"] . "</td>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Temporada"] . "</td>\n 
						<td><a href='formEquipos.php?editar=" . $fila["ID_equipo"] ."'><button class='bttn bttn-edit'></button></a></td>\n
						<td><form action='listaEquipos.php' method='POST'>
								<input type='hidden' name='id' value='" . $fila["ID_equipo"] . "'> 
								<input type='submit' class='bttn bttn-delete' name='borrar' value=''>
							</form></td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	// Listas de jugadores

	function pintaListaJugadores($orden) {
		$datos = getListaJugadores($orden);

		if (is_string($datos)) {
			echo $datos;

		} else {
			echo "<table>\n 
					<tr>\n
						<th>ID Jugador</th>\n
						<th>Nombre</th>\n
						<th>Posición</th>\n
						<th>Edad</th>\n
						<th>Partidos</th>\n
						<th>Goles</th>\n
						<th>ID Equipo</th>\n
						<th>¿Editar?</th>\n
						<th>¿Eliminar?</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				// Añado el boton de editar como un enlace. "Fuerzo a que se convierta en un método GET y paso el ID..
				echo "<tr>\n
						<td>" . $fila["ID_jugador"] . "</td>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Posición"] . "</td>\n
						<td>" . $fila["Edad"] . "</td>\n
						<td>" . $fila["Partidos"] . "</td>\n
						<td>" . $fila["Goles"] . "</td>\n
						<td>" . $fila["ID_equipo"] . "</td>\n 
						<td><a href='formJugadores.php?editar=" . $fila["ID_jugador"] ."'><button class='bttn bttn-edit'></button></a></td>\n
						<td><form action='listaJugadores.php' method='POST'>
								<input type='hidden' name='id' value='" . $fila["ID_jugador"] . "'> 
								<input type='submit' class='bttn bttn-delete' name='borrar' value=''>
							</form></td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	function pintaBuscarJugadores($criterio) {
		$datos = getBuscarJugadores($criterio);

		if (is_string($datos)) {
			echo $datos;

		} else {
			echo "<table>\n 
					<tr>\n
						<th>ID Jugador</th>\n
						<th>Nombre</th>\n
						<th>Posición</th>\n
						<th>Edad</th>\n
						<th>Partidos</th>\n
						<th>Goles</th>\n
						<th>ID Equipo</th>\n
						<th>¿Editar?</th>\n
						<th>¿Eliminar?</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				// Añado el boton de editar como un enlace. "Fuerzo a que se convierta en un método GET y paso el ID..
				echo "<tr>\n
						<td>" . $fila["ID_jugador"] . "</td>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Posición"] . "</td>\n
						<td>" . $fila["Edad"] . "</td>\n
						<td>" . $fila["Partidos"] . "</td>\n
						<td>" . $fila["Goles"] . "</td>\n
						<td>" . $fila["ID_equipo"] . "</td>\n 
						<td><a href='formJugadores.php?editar=" . $fila["ID_jugador"] ."'><button class='bttn bttn-edit'></button></a></td>\n
						<td><form action='listaJugadores.php' method='POST'>
								<input type='hidden' name='id' value='" . $fila["ID_jugador"] . "'> 
								<input type='submit' class='bttn bttn-delete' name='borrar' value=''>
							</form></td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	// Listas de entrenadores

	function pintaListaEntrenadores($orden) {
		$datos = getListaEntrenadores($orden);

		if (is_string($datos)) {
			echo $datos;

		} else {
			echo "<table>\n 
					<tr>\n
						<th>ID Entrenador</th>\n
						<th>Nombre</th>\n
						<th>ID Equipo</th>\n
						<th>¿Editar?</th>\n
						<th>¿Eliminar?</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				// Añado el boton de editar como un enlace. "Fuerzo a que se convierta en un método GET y paso el ID..
				echo "<tr>\n
						<td>" . $fila["ID_entrenador"] . "</td>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["ID_equipo"] . "</td>\n 
						<td><a href='formEntrenadores.php?editar=" . $fila["ID_entrenador"] ."'><button class='bttn bttn-edit'></button></a></td>\n
						<td><form action='listaEntrenadores.php' method='POST'>
								<input type='hidden' name='id' value='" . $fila["ID_entrenador"] . "'> 
								<input type='submit' class='bttn bttn-delete' name='borrar' value=''>
							</form></td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

	// Listas de usuarios

	function pintaListaUsuarios($orden) {
		$datos = getListaUsuarios($orden);

		if (is_string($datos)) {
			echo $datos;

		} else {
			echo "<table>\n 
					<tr>\n
						<th>ID Usuario</th>\n
						<th>Nombre</th>\n
						<th>Correo</th>\n
						<th>Contraseña</th>\n
						<th>Autorizado</th>\n
						<th>¿Editar?</th>\n
						<th>¿Eliminar?</th>\n
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				// Añado el boton de editar como un enlace. "Fuerzo a que se convierta en un método GET y paso el ID..
				echo "<tr>\n
						<td>" . $fila["ID_usuario"] . "</td>\n
						<td>" . $fila["Nombre"] . "</td>\n
						<td>" . $fila["Email"] . "</td>\n
						<td>		Encriptada		</td>\n
						<td>" . $fila["Enabled"] . "</td>\n
						<td><a href='formUsuarios.php?editar=" . $fila["ID_usuario"] ."'><button class='bttn bttn-edit'></button></a></td>\n
						<td><form action='listaUsuarios.php' method='POST'>
								<input type='hidden' name='id' value='" . $fila["ID_usuario"] . "'> 
								<input type='submit' class='bttn bttn-delete' name='borrar' value=''>
							</form></td>\n
					</tr>";
			};
			
			echo "</table>";
		};
	}

?>