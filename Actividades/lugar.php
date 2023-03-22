<?php
include "conexion.php";
include "accion2.php";
?>

<body>
    <div class="container m-o content-justify-center px-2">
        <div class="row text-center">
            <h1 class="text-success-emphasis">lugar</h1>
        </div>
        <form id="lugar" action="<?php echo $_SERVER['PHP_SELF'];?>" Method="POST">
        <div class="row-text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="NombreL" class="form-control" placeholder="Nombre del lugar" required>
            </div>
        </div>
        <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="text" name="Descripcion" class="form-control" placeholder="Descripcion del lugar" required>
        </div>
        <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="Telefono" name="Telefono" class="form-control" placeholder="55-55-55-55" required>
        </div>
        <div class="row text-center">
         <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="Email" name="correo" class="form-control" placeholder="Email" required>
         </div>
        </div>
        <div class="row-text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="Facebook" class="form-control" placeholder="Facebook" required>
            </div>
        </div>
        <div class="row-text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="Horario" class="form-control" placeholder="Horario" required>
            </div>
        </div>
        <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="submit"  value="registrar" name="btn" class="btn btn-success">
        </div>
    </form>
    </div>
</body>
</html>