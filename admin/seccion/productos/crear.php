<?php 
include ("../../bd.php");

if ($_POST) {
    print_r($_POST);

    $nombre = (isset($_POST["nombre"])) ? $_POST["nombre"] : "";
    $descripcion = (isset($_POST["descripcion"])) ? $_POST["descripcion"] : "";
    $precio = (isset($_POST["precio"])) ? $_POST["precio"] : "";
    
    $nombre_foto = "";
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK) {
        $foto = $_FILES['foto']['name'];
        $fecha_foto = new DateTime();
        $nombre_foto = $fecha_foto->getTimestamp() . "_" . $foto;
        $tmp_foto = $_FILES["foto"]["tmp_name"];

        // Verifica si el directorio existe, si no, créalo
        $target_dir = "../../images/productos/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        if ($tmp_foto != "") {
            move_uploaded_file($tmp_foto, $target_dir . $nombre_foto);
        }
    }

    $sentencia = $conexion->prepare("INSERT INTO `tbl_productos` (`ID`, `nombre`, `descripcion`, `foto`, `precio`) VALUES (NULL, :nombre, :descripcion, :foto, :precio);");
    
    $sentencia->bindParam(":foto", $nombre_foto);
    $sentencia->bindParam(":nombre", $nombre);
    $sentencia->bindParam(":descripcion", $descripcion);
    $sentencia->bindParam(":precio", $precio);
    
    $sentencia->execute();
}

include ("../../templates/header.php"); ?>
<br/>
<div class="card">
    <div class="card-header">
        Menú de comida
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre:">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Descripción:">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto:</label>
                <input type="file" class="form-control" name="foto" id="foto" placeholder="" aria-describedby="fileHelpId">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="text" class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="Precio:">
            </div>
            <button type="submit" class="btn btn-success">Agregar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
    </div>
    <div class="card-footer text-muted">
    </div>
</div>

<?php include ("../../templates/footer.php"); ?>
