<?php
if(isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
    echo "Hola $nombre, que tengas un Buen dia :)";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">    
    <title>Ejemplo de GET</title>
</head>
<body>
    Introduce tu Nombre:
    <form action="" method="get">
        <input type="text" name="nombre">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>