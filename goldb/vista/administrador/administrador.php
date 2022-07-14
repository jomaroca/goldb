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

    <h2 class="subtitulo">Administación de la Plataforma</h2>

    <div class="btns-container">
    <a href="../administrador/listaEquipos.php"><button class="btn btn-white">Equipos</button></a>
    <a href="../administrador/listaJugadores.php"><button class="btn btn-white">Jugadores</button></a>
    <a href="../administrador/listaEntrenadores.php"><button class="btn btn-white">Entrenadores</button></a>
    <a href="../administrador/listaUsuarios.php"><button class="btn btn-white">Usuarios</button></a>
    </div> 
    
    <a class="enlace" href="../../index.html">Volver a Inicio</a>

    <script src="../js/menu.js"></script>
</body>
</html>