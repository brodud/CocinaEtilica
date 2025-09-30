
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid"> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="menu">
            
            <ul class="navbar-nav ms-auto"> 
                <li class="nav-item"><a class="nav-link active" href="#">Inicio admin</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Gestionar productos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Gestionar clientes</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Ver pedidos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Ver proveedores</a></li>
            </ul>
            
            <div class="dropdown d-flex ms-3 me-2"> 
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownAdmin" data-bs-toggle="dropdown" aria-expanded="false">
                    Bienvenido, *<?php echo $nombreAdmin; ?>* </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAdmin"> <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li><a class="dropdown-item" href="cerrarSesion.php">Cerrar sesión</a></li>
                </ul>
            </div>
            
        </div>
    </div> </nav> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>