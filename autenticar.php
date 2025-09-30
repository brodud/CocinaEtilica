<?php 
session_start();

require_once ("logica/Persona.php"); 
require_once ("logica/Admin.php");
require_once ("logica/Cliente.php");

if(isset($_POST["autenticar"])){
    $correo = $_POST["correo"];
    $clave = $_POST["clave"];
    $redireccion = "";
    $nombreUsuario = "";
    
    // Autenticar como Admin
    $admin = new Admin("", "", "", $correo, $clave);
    if($admin -> autenticar()){
        $_SESSION["id"] = $admin -> getId();
        $_SESSION["rol"] = "admin";
        
        $admin->consultar(); 
        $nombreUsuario = $admin->getNombre() . " " . $admin->getApellido();
        $redireccion = 'sesionAdmin.php';
    }
    
    // Si no es Admin, intentar autenticar como Cliente
    if(empty($redireccion)){
        $cliente = new Cliente("", "", "", $correo, $clave);

        if($cliente -> autenticar()){ 
            $_SESSION["id"] = $cliente -> getId();
            $_SESSION["rol"] = "cliente";
            
            $cliente->consultarId(); 
            
            $nombreUsuario = $cliente->getNombre() . " " . $cliente->getApellido();
            $redireccion = 'sesionCliente.php';
        }
    }
    
    // Redirección final
    if (!empty($redireccion)) {
        $_SESSION["nombre_usuario"] = $nombreUsuario;
        header('Location: ' . $redireccion);
        exit();
    } else {
        // La autenticación falló 
        $error = "Correo o clave incorrectos.";
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Cocina Etilica</title>
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
	rel="stylesheet">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-4"></div>
			<div class="col-4">
				<div class="card">
					<div class="card-header">
						<h3>Autenticar</h3>
					</div>
					<div class="card-body">
						<?php 
						if(isset($_POST["registrar"])){
						    echo "<div class='alert alert-success' role='alert'>
                                    Cliente almacenado
                                    </div>";
						}
						?>
						<form method="post" action="autenticar.php">
							<div class="mb-3">
								<input type="email" class="form-control" name="correo"
									placeholder="Correo" required>
							</div>
							<div class="mb-3">
								<input type="password" class="form-control" name="clave"
									placeholder="Clave" required>
							</div>
							<div class="mb-3">
								<button type="submit" class="btn btn-primary" name="autenticar">Autenticar</button>
							</div>

						</form>

					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>