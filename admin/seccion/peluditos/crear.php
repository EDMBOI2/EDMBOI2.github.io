<?php
include("../../bd.php");
if ($_POST) {
    $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : "";
    $descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : "";
    $linkfacebook = (isset($_POST['linkfacebook'])) ? $_POST['linkfacebook'] : "";
    $linkinstagram = (isset($_POST['linkinstagram'])) ? $_POST['linkinstagram'] : "";
    $linktwitter = (isset($_POST['linktwitter'])) ? $_POST['linktwitter'] : ""; // Corrected the variable name here
    $sentencia = $conexion->prepare("
    INSERT INTO `tbl_peluditos` (`titulo`, `descripcion`, `linkfacebook`, `linkinstagram`, `linktwitter`, `foto`) 
    VALUES (:titulo, :descripcion, :linkfacebook, :linkinstagram, :linktwitter, :foto);"); // Removed quotes around placeholders and ID field as it's likely auto-incrementing

    // Check if the foto exists in the FILES array and handle accordingly
    $nombre_foto = ""; // Default blank if no foto
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $foto = $_FILES['foto']['name'];
        $fecha_foto = new DateTime();
        $nombre_foto = $fecha_foto->getTimestamp() . "_" . $foto;
        $tmp_foto = $_FILES['foto']['tmp_name'];
        
        if ($tmp_foto != "") {
            move_uploaded_file($tmp_foto, "../../images/peluditos/" . $nombre_foto);
        }
    }

    $sentencia->bindParam(":titulo", $titulo);
    $sentencia->bindParam(":descripcion", $descripcion);
    $sentencia->bindParam(":linkfacebook", $linkfacebook);
    $sentencia->bindParam(":linkinstagram", $linkinstagram);
    $sentencia->bindParam(":linktwitter", $linktwitter);
    $sentencia->bindParam(":foto", $nombre_foto);
    $sentencia->execute();
}      

include("../../templates/header.php");
?>
<br/>
<div class="card">
    <div class="card-header">
        Peluditos
    </div>
    <div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="foto" class="form-label">Foto:</label>
                <input type="file" class="form-control" name="" id="" placeholder="" aria-describedby="fileHelpId" />               
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="" />
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion:</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="" />
            </div>
            <div class="mb-3">
                <label for="linkfacebook" class="form-label">Facebook</label>
                <input type="text" class="form-control" name="linkfacebook" id="linkfacebook" aria-describedby="helpId" placeholder="" />
            </div>
            <div class="mb-3">
                <label for="linkinstagram" class="form-label">Instagram</label>
                <input type="text" class="form-control" name="linkinstagram" id="linkinstagram" aria-describedby="helpId" placeholder="" />
            </div>
            <div class="mb-3">
                <label for="linktwitter" class="form-label">Twitter</label>
                <input type="text" class="form-control" name="linktwitter" id="linktwitter" aria-describedby="helpId" placeholder="" />
            </div>
            <button type="submit" class="btn btn-success">Agregar</button>
            <a name=""id=""class="btn btn-primary"href="index.php"role="button">Cancelar</a>  
        </form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>

<?php
include("../../templates/footer.php");
?>