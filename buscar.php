<?php 
$enlace = mysqli_connect("127.0.0.1","admin","admin","prueba")
or die(mysql_error($mysqli);

function buscar($enlace){
    $query = "SELECT * FROM producto ";
    $consulta_nm = mysqli_query($enlace,$query);
    $mostrar=mysqli_fetch_array($consulta_nm);
    return $mostrar;
    mysqli_free_result($mostrar);
    mysqli_close($enlace);
}
?>