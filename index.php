<?php session_start();
   require_once "./clases/conexion.php";
   require_once "./clases/crud.php";
   $crud =  new Crud();
   $datos = $crud->mostrarDatos();

   $mensaje = '';
   if (isset($_SESSION['mensaje_crud'])) {
       $mensaje = $crud->mensajesCrud($_SESSION['mensaje_crud']);
       unset($_SESSION['mensaje_crud']);
   }

?>


<?php include "./header.php";?>
 

    <div class="container">
        <div class="row">
            <div class="col">
            <div class="card mt-4">
            <div class="card-body">
                <h2>Crud Priverion</h2>
                <a href="./agregar.php" class="btn btn-primary">
                    Agregar nuevo dato
                </a>
                <hr>
                <table class="table table-sm table-hover table-bordered">
                    <thead>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                        <th>editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                    <?php 
                            foreach ($datos as $item) {
                                
                            
                        ?>
                        <tr>
                            <td><?php echo $item->primer; ?></td>
                            <td><?php echo $item->segundo; ?></td>
                            <td><?php echo $item->nombre; ?></td>
                            <td><?php echo $item->fecha_nacimiento; ?></td>
                            <td>
                            <form action="./actualizar.php" method="post">
                                <input type="text" hidden  value = "<?php echo $item->_id?>" name = "id">
                                    <button class="btn btn-warning">
                                    <i class="fa-solid fa-user-pen"></i>
                                    </button>
                                </form></td>
                            <td>
                            <form action="./eliminar.php" method="POST">
                                    <input type="text" hidden value = "<?php echo $item->_id?>" name = "id">
                                    <button class="btn btn-danger">
                                    <i class="fa-solid fa-user-xmark"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>



<?php include "./scripts.php";?>

<script>
    let mensaje = <?php echo $mensaje; ?>
    console.log(mensaje);
    
</script>