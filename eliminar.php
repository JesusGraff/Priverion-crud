<?php 
include "./clases/conexion.php"; 
include "./clases/crud.php";
include "./header.php"; ?>

<?php 

$crud = new Crud();   
$id = $_POST["id"];
$datos = $crud->obtenerDocumento($id);
?>


<div class="container">
        <div class="rows">
            <div class="col">
            <div class="card mt-4 border-danger">
                <div class="card-body">
                <a href="index.php" class="btn btn-info">
                    <i class="fa-solid fa-angles-left"></i> Regresar
                </a>
                <h2>Eliminar registro</h2>
                
                <table class="table table-sm table-bordered table-danger">
                <thead>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>Nombre</th>
                    <th>Fecha de nacimiento</th>
                </thead>
                <tbody>
                    <tr>
                    <td><?php echo $datos->primer; ?></td>
                    <td><?php echo $datos->segundo; ?></td>
                    <td><?php echo $datos->nombre; ?></td>
                    <td><?php echo $datos->fecha_nacimiento; ?></td>>
                    </tr>
                </tbody>
            </table>
            <hr>
            <div class="alert alert-danger" role="alert">
  <p>¿Estas seguro de eliminar este registro?</p>
  <p>Una vez eliminado no podra ser recuperado!</p>
</div>
            <form action="./procesos/eliminar.php" method="POST">
            <input type="text" name="id" value="<?php echo $datos->_id; ?>" hidden>
                <button class="btn btn-danger">
                <i class="fa-solid fa-user-xmark"></i> Eliminar
                </button>
            </form>
                
            </div>
        </div>
    </div>
  </div>
</div>


<?php include "./scripts.php"; ?>