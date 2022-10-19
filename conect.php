<?php 
    $nombreProducto = $_POST['nombreProducto'];
    $cantidadProducto = $_POST['cantidadProducto'];
    $precioProducto = $_POST['precioProducto'];
    $fechavencimiento = $_POST['fechavencimiento'];
    $imagenProducto = $_POST['imagenProducto'];
    $informacionAdicional = $_POST['informacionAdicional'];
    $enlace = mysqli_connect("127.0.0.1","root","","eatsoon");
    if(!$enlace){
        die("no se puede".mysqli_error());
    }    
    $accion_nm = "INSERT INTO producto(nombre_producto,precio_producto,fecha_caducidad,desc_producto,cantidad,imagen) VALUES ('$nombreProducto','$precioProducto','$fechavencimiento','$informacionAdicional','$cantidadProducto','$imagenProducto')";

    $consulta_nm = mysqli_query($enlace,$accion_nm) or die(mysqli_error());
    
    mysqli_close($enlace);
    
?>