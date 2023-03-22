<?php
include "conexion.php";
include "accion2.php";
?>

<body>
    <div class="container m-o content-justify-center px-2">
        <div class="row text-center">
            <h1 class="text-success-emphasis">plantel</h1>
        </div>
        <form id="plantel" action="<?php echo $_SERVER['PHP_SELF'];?>" Method="POST">
        <div class="row-text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="NombrePlantel" class="form-control" placeholder="NombrePlantel" required>
            </div>
        </div>
        <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="text" name="ClaveP" class="form-control" placeholder="ClaveP" required>
        </div>
        <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <textarea name="Direccion" class="form-control" placeholder="Direccion" required></textarea>
        </div>
        <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="Telefono" name="Telefono" class="form-control" placeholder="55-55-55-55" required>
        </div>
        <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="text" name="Responsable" class="form-control" placeholder="Responsable" required>
        </div>
        <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="submit"  value="registrar" name="btn" class="btn btn-success">
        </div>
    </form>
    </div>
</body>
</html>