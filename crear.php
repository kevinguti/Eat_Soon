<?php

    require './config/env.php';
    require './config/conexion.php';
    require './functions/cuenta.php'; 

    $con = conexion($db_config);
    
    /** Verificar si se envio por el metodo POST */
    if($_SERVER['REQUEST_METHOD'] == 'POST'){    
        $data = [
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'ci' => $_POST['ci'],
            'direccion' => $_POST['direccion'],
            'telefono' => $_POST['telefono'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'Cpassword' => $_POST['Cpassword']

        ];
        if($data['password']==$data['Cpassword']){
            $create = createUser($con, $data);
        }else{
            //para mostrar mensaje no crear cuenta
        }
    

    if(!$create){
         echo "El producto ingresado ya existe";
    }

        header('Location: crearjjjjj.php');
    }
        
    $title = "Creacion de Cuenta"; // Nombre del title

    $page = './pages/crearCuenta.pages.php';  // Nombre y ruta de la pagina
    $img = '.img';
    require './templates/home.template.php'; // Require template

?>