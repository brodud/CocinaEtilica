<?php

$nombre = isset($_SESSION["nombre_usuario"]) ? $_SESSION["nombre_usuario"] : "Usuario";
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Inicio admin</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Gestionar Productos</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Gestionar Clientes</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Ver Pedidos</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Ver proveedores</a></li>
      </ul>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            Bienvenido <?php echo $nombreAdmin; ?> </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
        </ul>
    </div>
    </div>
</nav>
</body>