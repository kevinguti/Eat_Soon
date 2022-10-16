<?php 
$enlace = mysqli_connect("127.0.0.1","admin","admin","prueba")
or die(mysql_error($mysqli);

function insertar($enlace){
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $fecha = $_POST['fecha'];
    $foto = $_POST['foto'];
    $descripcion = $_POST['descripcion'];

    $query = "INSERT INTO producto (id,nombre,cantidad,precio,fecha,foto,descripcion)
    VALUES ('$nombre','$cantidad','$precio','$fecha','$foto','$descripcion')";
    $consulta_nm = mysqli_query($enlace,$query) or die(mysqli_error());

    mysqli_close($enlace);
}
?>