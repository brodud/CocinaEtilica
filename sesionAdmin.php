<?php
session_start();
if(!isset($_SESSION["rol"]) || $_SESSION["rol"] != "admin"){
   
    header("Location: ?pid=" . base64_encode("presentacion/noAutorizado.php"));
    exit();
}

$nombreAdmin = $_SESSION["nombre_usuario"]; 
?>
<body>
<?php 
include ("presentacion/encabezado.php");
include ("presentacion/menuAdmin.php");
?>

</body>