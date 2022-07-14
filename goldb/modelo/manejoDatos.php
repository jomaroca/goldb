<?php

	require "../../modelo/conexion_db.php";

	// Consultas listas Barcelona

	function getListaEquiposBar() {
		// Nos conectamos a la base de datos goldb
		$DB = crearConexion("goldb");
		// Definimos la consulta para obtener todos los datos de la tabla.
		$sql = "SELECT Nombre, Temporada FROM equipos WHERE ID_equipo = 1";
		// Hacemos la consulta y guardamos el resultado en $result
		$result = mysqli_query($DB, $sql);

		// Si la consulta ha devuelto algún valor, devolvemos los valores.
		if (mysqli_num_rows($result) > 0) {
			return $result;
		// Si no, enviamos un mensaje de error.
		} else {
			echo "No hay nada en la lista de equipos.";
		}
	}

	function getListaJugadoresBar() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre, Posición, Edad, Partidos, Goles FROM jugadores WHERE ID_equipo = 1";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de jugadores.";
		}
	}

	function getListaEntrenadoresBar() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre FROM entrenadores WHERE ID_equipo = 1";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de entrenadores.";
		}
	}

	// Consultas listas Madrid

	function getListaEquiposMad() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre, Temporada FROM equipos WHERE ID_equipo = 2";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de equipos.";
		}
	}

	function getListaJugadoresMad() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre, Posición, Edad, Partidos, Goles FROM jugadores WHERE ID_equipo = 2";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de jugadores.";
		}
	}

	function getListaEntrenadoresMad() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre FROM entrenadores WHERE ID_equipo = 2";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de entrenadores.";
		}
	}

	// Consultas listas Milan

	function getListaEquiposMil() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre, Temporada FROM equipos WHERE ID_equipo = 3";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de equipos.";
		}
	}

	function getListaJugadoresMil() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre, Posición, Edad, Partidos, Goles FROM jugadores WHERE ID_equipo = 3";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de jugadores.";
		}
	}

	function getListaEntrenadoresMil() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre FROM entrenadores WHERE ID_equipo = 3";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de entrenadores.";
		}
	}

	// Consultas listas Juventus

	function getListaEquiposJuv() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre, Temporada FROM equipos WHERE ID_equipo = 4";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de equipos.";
		}
	}

	function getListaJugadoresJuv() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre, Posición, Edad, Partidos, Goles FROM jugadores WHERE ID_equipo = 4";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de jugadores.";
		}
	}

	function getListaEntrenadoresJuv() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre FROM entrenadores WHERE ID_equipo = 4";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de entrenadores.";
		}
	}

	// Consultas listas Manchester

	function getListaEquiposMan() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre, Temporada FROM equipos WHERE ID_equipo = 5";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de equipos.";
		}
	}

	function getListaJugadoresMan() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre, Posición, Edad, Partidos, Goles FROM jugadores WHERE ID_equipo = 5";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de jugadores.";
		}
	}

	function getListaEntrenadoresMan() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre FROM entrenadores WHERE ID_equipo = 5";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de entrenadores.";
		}
	}

	// Consultas listas Liverpool

	function getListaEquiposLiv() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre, Temporada FROM equipos WHERE ID_equipo = 6";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de equipos.";
		}
	}

	function getListaJugadoresLiv() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre, Posición, Edad, Partidos, Goles FROM jugadores WHERE ID_equipo = 6";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de jugadores.";
		}
	}

	function getListaEntrenadoresLiv() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre FROM entrenadores WHERE ID_equipo = 6";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de entrenadores.";
		}
	}

	// Consultas listas Munich

	function getListaEquiposMun() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre, Temporada FROM equipos WHERE ID_equipo = 7";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de equipos.";
		}
	}

	function getListaJugadoresMun() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre, Posición, Edad, Partidos, Goles FROM jugadores WHERE ID_equipo = 7";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de jugadores.";
		}
	}

	function getListaEntrenadoresMun() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre FROM entrenadores WHERE ID_equipo = 7";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de entrenadores.";
		}
	}

	// Consultas listas Ajax

	function getListaEquiposAja() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre, Temporada FROM equipos WHERE ID_equipo = 8";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de equipos.";
		}
	}

	function getListaJugadoresAja() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre, Posición, Edad, Partidos, Goles FROM jugadores WHERE ID_equipo = 8";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de jugadores.";
		}
	}

	function getListaEntrenadoresAja() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre FROM entrenadores WHERE ID_equipo = 8";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de entrenadores.";
		}
	}

	// Consultas máximos goleadores

	function getListaMaxGoleadores() {
		$DB = crearConexion("goldb");
		$sql = "SELECT Nombre, Posición, Edad, Partidos, Goles FROM jugadores ORDER BY Goles DESC LIMIT 11";
		$result = mysqli_query($DB, $sql);
		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "No hay nada en la lista de jugadores.";
		}
	}

	// Consultas loguear

	function getRegistro() {
    
        if(!empty($_POST['Email']) && !empty($_POST['Password'])){
        $nombre = $_POST['Nombre'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $password = password_hash($password, PASSWORD_BCRYPT); // Cifrado de contraseña.
        $enabled = null;
        
        // Nos conectamos a la base de datos.
        $DB = crearConexion("goldb");
        // Definimos la consulta para insertar todos los datos en la tabla.
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$email', '$password', '$enabled')";
        // Hacemos la consulta y guardamos el resultado.
        $guardar = mysqli_query($DB, $sql);
        // Si la consulta ha tenido éxito mostramos el mensaje.
        if($guardar){
            echo "Registrado con éxito.";
        }
        // En caso contrario se muestra el error.
        else {
            echo "Ha ocurrido un error al registrarse.";
            }
        }
    }

    function getAcceso() {

        if(!empty($_POST['Email']) && !empty($_POST['Password'])){
        $email = $_POST['Email'];
        $password = $_POST['Password'];
            
        // Nos conectamos a la base de datos.
        $DB = crearConexion("goldb");
        // Definimos la consulta para obtener los datos de la tabla.
        $sql = "SELECT * FROM usuarios WHERE Email = '$email'";
        // Hacemos la consulta y guardamos el resultado.
        $login = mysqli_query($DB, $sql);
        $usuario = mysqli_fetch_assoc($login);
        // Comprobamos el email y la contraseña introducida y la almacenada en la base de datos.
        if (!$usuario) {
            echo "Lo sentimos, sus datos son incorrectos.";
        } else {
            if (password_verify($password, $usuario['Password'])) {
                $_SESSION['id_usuario'] = $usuario;
            } else {
                    echo "Lo sentimos, sus datos son incorrectos.";
                }
            }
        }
    }

    function getSesion(){
        // Si existe la sesión en email dentro del id_usuario se realiza la consulta a la base de datos.
        if(isset($_SESSION['id_usuario']['Email'])){
            $email = $_SESSION['id_usuario']['Email'];
    
        // Nos conectamos a la base de datos.
        $DB = crearConexion("goldb");
        // Definimos la consulta para obtener los datos de la tabla.
        $sql = "SELECT * FROM usuarios WHERE Email = '$email'";
        // Hacemos la consulta y guardamos el resultado.
        $login = mysqli_query($DB, $sql);
        $usuario = mysqli_fetch_assoc($login);
        if($usuario['Enabled'] == 1){
            header('Location: ../../vista/administrador/administrador.php');
        }else if($usuario['Enabled'] == 0){
            header('Location: ../../vista/usuario/usuario.php');
            }
        }
    }

	// Consultas listas equipos

	function getListaEquipos($orden) {
		// Nos conectamos a la base de datos.
		$DB = crearConexion("goldb");
		// Definimos la consulta para obtener todos los datos de la tabla.

		if ($orden == "Creciente") {
			$sql = "SELECT ID_equipo, Nombre, Temporada FROM equipos ORDER BY ID_equipo ASC";
		} else {
			$sql = "SELECT ID_equipo, Nombre, Temporada FROM equipos ORDER BY ID_equipo DESC"; 
		}
		
		// Hacemos la consulta y guardamos el resultado en $result.
		$result = mysqli_query($DB, $sql);

		// Si la consulta ha devuelto algún valor, devolvemos los valores.
		if (mysqli_num_rows($result) > 0) {
			return $result;
		// Si no, enviamos un mensaje de error.
		} else {
			echo "No hay nada en la lista de equipos<br>";
		}
		mysqli_close();
	}

	function anadirEquipos($nombre, $temporada) {
		$DB = crearConexion("goldb");

		$sql = "INSERT INTO equipos (Nombre, Temporada) 
				VALUES ('" . $nombre . "', '" . $temporada . "')";  
				// Mucho cuidado con las comillas que abren y cierran.

		$result = mysqli_query($DB, $sql);

		if ($result) {
			return $result;
		} else {
			echo "Error en función añadir Equipos<br>";
		}
		mysqli_close($DB);
	}

	function borrarEquipos($identificador) {
		$DB = crearConexion("goldb");

		$sql = "DELETE FROM equipos WHERE ID_equipo='" . $identificador . "'";

		$result = mysqli_query($DB, $sql);

		if ($result) {
			return $result;
		// Si no, enviamos un mensaje de error.
		} else {
			echo "Error en función borrar Equipos<br>";
		}

		mysqli_close($DB);
	}

	function getEquipos($id){
		$DB = crearConexion("goldb");

		$sql = "SELECT Nombre, Temporada 
				FROM equipos
				WHERE ID_equipo = " . $id;

		$result = mysqli_query($DB, $sql);


		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "Error al obtener equipos<br>";
		}
		mysqli_close($DB);
	}

	// Modifico un equipo.	
	function modificarEquipos($id, $nombre, $temporada) {
		$DB = crearConexion("goldb");

		$sql = "UPDATE equipos 
				SET Nombre = '" . $nombre . "'" . 
				", Temporada =" . $temporada . 
				" WHERE ID_equipo =" . $id;  
				// Mucho cuidado con las comillas que abren y cierran.

		$result = mysqli_query($DB, $sql);

		if ($result) {
			return $result;
		} else {
			echo "Error en función modificar equipos<br>";
		}
		mysqli_close($DB);
	}

	// Consultas listas jugadores

	function getListaJugadores($orden) {
		// Nos conectamos a la base de datos.
		$DB = crearConexion("goldb");
		// Definimos la consulta para obtener todos los datos de la tabla.

		if ($orden == "Creciente") {
			$sql = "SELECT ID_jugador, Nombre, Posición, Edad, Partidos, Goles, ID_equipo FROM jugadores ORDER BY ID_jugador ASC";
		} else {
			$sql = "SELECT ID_jugador, Nombre, Posición, Edad, Partidos, Goles, ID_equipo FROM jugadores ORDER BY ID_jugador DESC"; 
		}
		
		// Hacemos la consulta y guardamos el resultado en $result.
		$result = mysqli_query($DB, $sql);

		// Si la consulta ha devuelto algún valor, devolvemos los valores.
		if (mysqli_num_rows($result) > 0) {
			return $result;
		// Si no, enviamos un mensaje de error.
		} else {
			echo "No hay nada en la lista de jugadores<br>";
		}
		mysqli_close();
	}

	function getBuscarJugadores($criterio){
		$DB = crearConexion("goldb");

		$sql = "SELECT ID_jugador, Nombre, Posición, Edad, Partidos, Goles, ID_equipo
				FROM jugadores 
				WHERE ID_equipo = " . $criterio;

		$result = mysqli_query($DB, $sql);

		if (mysqli_num_rows($result) > 0) {
			// Devuelve el array con todos los datos de todos los jugadores.
			return $result;
		} else {
			echo "Error al obtener jugadores<br>";
		}
		mysqli_close($DB);
	}

	function anadirJugadores($nombre, $posicion, $edad, $partidos, $goles, $id_equipo) {
		$DB = crearConexion("goldb");

		$sql = "INSERT INTO jugadores (Nombre, Posición, Edad, Partidos, Goles, ID_Equipo) 
				VALUES ('" . $nombre . "', '" . $posicion . "', '" . $edad . "', '" . $partidos . "', '" . $goles . "', '" . $id_equipo . "')";  
				// Mucho cuidado con las comillas que abren y cierran.

		$result = mysqli_query($DB, $sql);

		if ($result) {
			return $result;
		} else {
			echo "Error en función añadir Jugadores<br>";
		}
		mysqli_close($DB);
	}

	function borrarJugadores($identificador) {
		$DB = crearConexion("goldb");

		$sql = "DELETE FROM jugadores WHERE ID_jugador='" . $identificador . "'";

		$result = mysqli_query($DB, $sql);

		if ($result) {
			return $result;
		// Si no, enviamos un mensaje de error.
		} else {
			echo "Error en función borrar Jugadores<br>";
		}

		mysqli_close($DB);
	}

	function getJugadores($id){
		$DB = crearConexion("goldb");

		$sql = "SELECT Nombre, Posición, Edad, Partidos, Goles, ID_equipo 
				FROM jugadores
				WHERE ID_jugador = " . $id;

		$result = mysqli_query($DB, $sql);


		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "Error al obtener jugadores<br>";
		}
		mysqli_close($DB);
	}

	// Modifico un jugador.	
	function modificarJugadores($id, $nombre, $posicion, $edad, $partidos, $goles, $id_equipo) {
		$DB = crearConexion("goldb");

		$sql = "UPDATE jugadores 
				SET Nombre = '" . $nombre . "'" .
				", Posición = '" . $posicion . "'" .
				", Edad = '" . $edad . "'" .
				", Partidos = '" . $partidos . "'" .
				", Goles = '" . $goles . "'" . 
				", ID_equipo =" . $id_equipo . 
				" WHERE ID_jugador =" . $id;  
				// Mucho cuidado con las comillas que abren y cierran.

		$result = mysqli_query($DB, $sql);

		if ($result) {
			return $result;
		} else {
			echo "Error en función modificar jugadores<br>";
		}
		mysqli_close($DB);
	}

	// Consultas listas entrenadores

	function getListaEntrenadores($orden) {
		// Nos conectamos a la base de datos.
		$DB = crearConexion("goldb");
		// Definimos la consulta para obtener todos los datos de la tabla.

		if ($orden == "Creciente") {
			$sql = "SELECT ID_entrenador, Nombre, ID_equipo FROM entrenadores ORDER BY ID_entrenador ASC";
		} else {
			$sql = "SELECT ID_entrenador, Nombre, ID_equipo FROM entrenadores ORDER BY ID_entrenador DESC"; 
		}
		
		// Hacemos la consulta y guardamos el resultado en $result.
		$result = mysqli_query($DB, $sql);

		// Si la consulta ha devuelto algún valor, devolvemos los valores.
		if (mysqli_num_rows($result) > 0) {
			return $result;
		// Si no, enviamos un mensaje de error.
		} else {
			echo "No hay nada en la lista de entrenadores<br>";
		}
		mysqli_close();
	}

	function anadirEntrenadores($nombre, $id_equipo) {
		$DB = crearConexion("goldb");

		$sql = "INSERT INTO entrenadores (Nombre, ID_equipo) 
				VALUES ('" . $nombre . "', '" . $id_equipo . "')";  
				// Mucho cuidado con las comillas que abren y cierran.

		$result = mysqli_query($DB, $sql);

		if ($result) {
			return $result;
		} else {
			echo "Error en función añadir Entrenadores<br>";
		}
		mysqli_close($DB);
	}

	function borrarEntrenadores($identificador) {
		$DB = crearConexion("goldb");

		$sql = "DELETE FROM entrenadores WHERE ID_entrenador='" . $identificador . "'";

		$result = mysqli_query($DB, $sql);

		if ($result) {
			return $result;
		// Si no, enviamos un mensaje de error.
		} else {
			echo "Error en función borrar Entrenadores<br>";
		}

		mysqli_close($DB);
	}

	function getEntrenadores($id){
		$DB = crearConexion("goldb");

		$sql = "SELECT Nombre, ID_equipo 
				FROM entrenadores
				WHERE ID_entrenador = " . $id;

		$result = mysqli_query($DB, $sql);


		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "Error al obtener entrenadores<br>";
		}
		mysqli_close($DB);
	}

	// Modifico un entrenador.	
	function modificarEntrenadores($id, $nombre, $id_equipo) {
		$DB = crearConexion("goldb");

		$sql = "UPDATE entrenadores 
				SET Nombre = '" . $nombre . "'" . 
				", ID_equipo =" . $id_equipo . 
				" WHERE ID_entrenador =" . $id;  
				// Mucho cuidado con las comillas que abren y cierran.

		$result = mysqli_query($DB, $sql);

		if ($result) {
			return $result;
		} else {
			echo "Error en función modificar entrenadores<br>";
		}
		mysqli_close($DB);
	}

	// Consultas listas usuarios

	function getListaUsuarios($orden) {
		// Nos conectamos a la base de datos.
		$DB = crearConexion("goldb");
		// Definimos la consulta para obtener todos los datos de la tabla.

		if ($orden == "Creciente") {
			$sql = "SELECT ID_usuario, Nombre, Email, Password, Enabled FROM usuarios ORDER BY ID_usuario ASC";
		} else {
			$sql = "SELECT ID_usuario, Nombre, Email, Password, Enabled FROM usuarios ORDER BY ID_usuario DESC"; 
		}
		
		// Hacemos la consulta y guardamos el resultado en $result.
		$result = mysqli_query($DB, $sql);

		// Si la consulta ha devuelto algún valor, devolvemos los valores.
		if (mysqli_num_rows($result) > 0) {
			return $result;
		// Si no, enviamos un mensaje de error.
		} else {
			echo "No hay nada en la lista de usuarios<br>";
		}
		mysqli_close();
	}

	function anadirUsuarios($nombre, $email, $password, $enabled) {
		$password = password_hash($password, PASSWORD_BCRYPT); // Cifrado de contraseña.

		$DB = crearConexion("goldb");
		
		$sql = "INSERT INTO usuarios (Nombre, Email, Password, Enabled) 
				VALUES ('" . $nombre . "', '" . $email . "', '" . $password . "', '" . $enabled . "')";  
				// Mucho cuidado con las comillas que abren y cierran.

		$result = mysqli_query($DB, $sql);

		if ($result) {
			return $result;
		} else {
			echo "Error en función añadir Usuarios<br>";
		}
		mysqli_close($DB);
	}

	function borrarUsuarios($identificador) {
		$DB = crearConexion("goldb");

		$sql = "DELETE FROM usuarios WHERE ID_usuario='" . $identificador . "'";

		$result = mysqli_query($DB, $sql);

		if ($result) {
			return $result;
		// Si no, enviamos un mensaje de error.
		} else {
			echo "Error en función borrar Usuarios<br>";
		}

		mysqli_close($DB);
	}

	function getUsuarios($id){
		$DB = crearConexion("goldb");

		$sql = "SELECT Nombre, Email, Password, Enabled 
				FROM usuarios
				WHERE ID_usuario = " . $id;

		$result = mysqli_query($DB, $sql);


		if (mysqli_num_rows($result) > 0) {
			return $result;
		} else {
			echo "Error al obtener usuarios<br>";
		}
		mysqli_close($DB);
	}

	// Modifico un usuario.	
	function modificarUsuarios($id, $nombre, $email, $password, $enabled) {
		$password = password_hash($password, PASSWORD_BCRYPT); // Cifrado de contraseña.
		
		$DB = crearConexion("goldb");

		$sql = "UPDATE usuarios 
				SET Nombre = '" . $nombre . "'" .
				", Email = '" . $email . "'" .
				", Password = '" . $password . "'" .
				", Enabled =" . $enabled . 
				" WHERE ID_usuario =" . $id;  
				// Mucho cuidado con las comillas que abren y cierran.

		$result = mysqli_query($DB, $sql);

		if ($result) {
			return $result;
		} else {
			echo "Error en función modificar usuarios<br>";
		}
		mysqli_close($DB);
	}

?>