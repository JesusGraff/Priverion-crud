
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <form action="" method="post">
                                <button class="btn btn-warning">
                                    <i class="fa-solid fa-user-pen"></i>
                                </button>
                                </form></td>
                            <td>
                                <form action="" method="post">
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-user-xmark"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>



<?php include "./scripts.php";?>