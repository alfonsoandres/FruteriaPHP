<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Fruteria del siglo XXI</title>
    <h1>La Fruteria del siglo XXI</h1>
    <h3>BIENVENIDO A NUESTRA FRUTERIA DEL SIGLO XXI</h3>
</head>
<body>
<?php 

include_once 'app/funciones.php';

if ( !isset($_REQUEST['orden']) ){
    include_once 'app/entrada.php';
} 
else {
    switch ($_REQUEST['orden']){
        
        case "Entrar":
            if (isset($_REQUEST['nombre'])) {
               echo " Bienvenido <b>".$_REQUEST['nombre']."</b><br>";
               session_start();
               $_SESSION["usuario"] = $_REQUEST['nombre'];

               include_once  'app/compra.php';
            }
            else {
                include_once 'app/entrada.php';
                echo " <br> Usuario no válido </br>";
            }
            break;
            
        case "Compra":
            include_once  'app/compra.php';
            break;
        case "Anotar":
            include_once 'app/compra.php';
            break;

        case "Terminar": // Formulario inicial
            include_once 'app/entrada.php';
    }
    
}

?>
</div>
</div>
</body>
</html>