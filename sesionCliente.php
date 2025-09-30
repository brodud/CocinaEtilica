<?php
session_start();


if(!isset($_SESSION["rol"]) || $_SESSION["rol"] != "cliente"){
    // Redirige a una página de No Autorizado 
    header("Location: ?pid=" . base64_encode("presentacion/noAutorizado.php"));
    exit();
}

$nombreCliente = $_SESSION["nombre_usuario"]; 

?>
<body>
<?php 
include ("presentacion/encabezado.php");
include ("presentacion/menuCliente.php"); 
?>

</body>