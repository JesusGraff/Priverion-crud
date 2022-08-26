<?php 

    include "./clases/conexion.php";
    include "./clases/crud.php";

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);
    $idMongo = $datos->_id;


?>
    
<?php include "./header.php"; ?>

<div class="container">
        <div class="rows">
            <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                <a href="index.php" class="btn btn-info">
                    <i class="fa-solid fa-angles-left"></i> Regresar
                </a>
                <h2>Actalizar registro</h2>
                
                <form action="./procesos/actualizar.php" method="post">
                <label for="primer">Primer apellido</label>
                <input type="text" hidden value = "<?php echo $idMongo?>" name = "id">
                <input type="text" class="form-control" id="primer" name="primer" value = "<?php echo $datos->primer?>">
                <label for="segundo">Segundo apellido</label>
                <input type="text" class="form-control" id="segundo" name="segundo" value = "<?php echo $datos->segundo?>">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value = "<?php echo $datos->nombre?>">
                <label for="fechaNacimiento">Fecha de nacimiento</label>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control" 
                value = "<?php echo $datos->fecha_nacimiento?>">
                <button class="btn btn-warning mt-3"> <i class="fa-solid fa-floppy-disk"></i> Actualizar </button>
                </form>

            </div>
        </div>
    </div>
  </div>
</div>


<?php include "./scripts.php"; ?>