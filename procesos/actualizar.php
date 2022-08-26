<?php session_start();
    include "../clases/conexion.php";
    include "../clases/crud.php";

    $crud = new Crud();

    $id = $_POST['id'];

    $datos = array(
        "primer" => $_POST['primer'],
        "segundo" => $_POST['segundo'],
        "nombre" => $_POST['nombre'],
        "fecha_nacimiento" => $_POST['fechaNacimiento']
    );

    $respuesta = $crud->actualizar($id, $datos);

    if ($respuesta->getModifiedCount() > 0  || $respuesta->getMatchedCount() > 0) {
        $_SESSION['mensaje_crud'] = 'update';
        header("location:../index.php");
    }else {
        print_r($respuesta);
    }

    ?>