<?php include "./header.php"; ?>

<div class="container">
        <div class="rows">
            <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                <a href="index.php" class="btn btn-info">
                    <i class="fa-solid fa-angles-left"></i> Regresar
                </a>
                <h2>Nuevo registro</h2>
                
                <form action="./procesos/insertar.php" method="post">
                <label for="primer">Primer apellido</label>
                <input type="text" class="form-control" id="primer" name="primer" required>
                <label for="segundo">Segundo apellido</label>
                <input type="text" class="form-control" id="segundo" name="segundo">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
                <label for="fechaNacimiento">Fecha de nacimiento</label>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control" required>
                <button class="btn btn-primary mt-3"> <i class="fa-solid fa-floppy-disk"></i> Agregar</button>
                </form>

            </div>
        </div>
    </div>
  </div>
</div>


<?php include "./scripts.php"; ?>