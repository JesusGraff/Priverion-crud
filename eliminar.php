<?php 

include "./header.php"; ?>


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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <div class="alert alert-danger" role="alert">
  <p>¿Estas seguro de eliminar este registro?</p>
  <p>Una vez eliminado no podra ser recuperado!</p>
</div>
            <form action="" method="POST">
                <input type="text" name="id" value="" hidden>
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