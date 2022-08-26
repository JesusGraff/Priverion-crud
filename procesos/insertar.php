<?php session_start();
    include "../clases/conexion.php";
    include "../clases/crud.php";

    $crud = new Crud();

    $datos = array(
        "primer" => $_POST['primer'],
        "segundo" => $_POST['segundo'],
        "nombre" => $_POST['nombre'],
        "fecha_nacimiento" => $_POST['fechaNacimiento']
    );

    $respuesta = $crud->insertarDatos($datos);

    if($respuesta->getInsertedId() > 0) {
        $_SESSION['mensaje_crud'] = 'insert';
        header("location:../index.php");
    } else{
        print_r($respuesta);
    }
?>
Footer