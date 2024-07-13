<?php 
include("../../bd.php");

if($_POST){
    $txtID = (isset($_POST['txtID']))?$_POST['txtID']:"";
    $titulo = (isset($_POST['titulo']))?$_POST['titulo']:"";
    $descripcion = (isset($_POST['descripcion']))?$_POST['descripcion']:"";
    $linkfacebook = (isset($_POST['linkfacebook']))?$_POST['linkfacebook']:"";
    $linkinstagram = (isset($_POST['linkinstagram']))?$_POST['linkinstagram']:"";
    $linktwitter = (isset($_POST['linktwitter']))?$_POST['linktwitter']:"";
    $sentencia = $conexion->prepare("UPDATE `tbl_peluditos` SET 
        titulo = :titulo,
        descripcion = :descripcion, 
        linkfacebook = :linkfacebook,
        linkinstagram = :linkinstagram,
        linktwitter = :linktwitter
        WHERE ID = :id");

    $sentencia->bindParam(':titulo', $titulo);
    $sentencia->bindParam(':descripcion', $descripcion);
    $sentencia->bindParam(':linkfacebook', $linkfacebook);
    $sentencia->bindParam(':linkinstagram', $linkinstagram);
    $sentencia->bindParam(':linktwitter', $linktwitter);
    $sentencia->bindParam(':id', $txtID, PDO::PARAM_INT);
    $sentencia->execute();

}

if(isset($_GET['txtID'])){
    $txtID = isset($_GET["txtID"]) ? $_GET["txtID"] : "";
    $sentencia=$conexion->prepare("SELECT * FROM `tbl_peluditos` WHERE ID=:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);
    $titulo=$registro["titulo"];
    $descripcion=$registro["descripcion"];
    $foto = $registro["foto"];
    $linkfacebook = $registro["linkfacebook"];
    $linkinstagram = $registro["linkinstagram"];
    $linktwitter = $registro["linktwitter"];

    $nombre_foto =(isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK);
    $tmp_foto = $_FILES['foto']['tmp_name'];
    if($nombre_foto!=""){$fecha_foto = new DateTime();
        $nombre_foto = $fecha_foto->getTimestamp() . "_" . basename($foto_name);
        move_uploaded_file($tmp_foto,"../../../images/peluditos/" . $nombre_foto);
        $sentencia=$conexion->prepare("SELECT * FROM `tbl_peluditos` WHERE ID=:id");
        $sentencia->bindParam(":id",$txtID);
        $sentencia->execute();
        $registro_foto = $sentencia->fetch(PDO::FETCH_LAZY);
        
        if (isset($registro_foto['foto'])) {
            // Check if the file exists in the specified directory
            if (file_exists("../../../images/peluditos/" . $registro_foto['foto'])) {
                // If the file exists, delete it
                unlink("../../../images/peluditos/" . $registro_foto['foto']);
            }
        }
        $sentencia = $conexion->prepare("UPDATE `tbl_peluditos` 
        SET 
        foto = :foto,
        WHERE ID = :id");

    $sentencia->bindParam(':foto', $nombre_foto);
    $sentencia->bindParam(':id', $txtID, PDO::PARAM_INT);
    $sentencia->execute();

    }
    
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve POST data and sanitize inputs
    $txtID = filter_input(INPUT_POST, 'txtID', FILTER_SANITIZE_NUMBER_INT);
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $descripcion = filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
    $linkfacebook = filter_input(INPUT_POST, 'linkfacebook', FILTER_SANITIZE_URL);
    $linkinstagram = filter_input(INPUT_POST, 'linkinstagram', FILTER_SANITIZE_URL);
    $linktwitter = filter_input(INPUT_POST, 'linktwitter', FILTER_SANITIZE_URL);


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
                <label for="titulo" class="form-label">ID:</label>
                <input type="text" class="form-control" value="<?php echo $txtID;?>" name="txtID" id="txtID" aria-describedby="helpId" placeholder="Escriba el titulo del banner"/>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto:</label><br/>
                <img width="50" src="../../../images/peluditos/<?php echo $titulo;?> "/>
                <input type="file" value="<?php echo $titulo;?>" class="form-control" name="" id="" placeholder="" aria-describedby="fileHelpId" />               
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo:</label>
                <input type="text" value="<?php echo $titulo;?>" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="" />
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion:</label>
                <input type="text" value="<?php echo $descripcion;?>" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="" />
            </div>
            <div class="mb-3">
                <label for="linkfacebook" class="form-label">Facebook</label>
                <input type="text" value="<?php echo $linkfacebook;?>" class="form-control" name="linkfacebook" id="linkfacebook" aria-describedby="helpId" placeholder="" />
            </div>
            <div class="mb-3">
                <label for="linkinstagram" class="form-label">Instagram</label>
                <input type="text" value="<?php echo $linkinstagram;?>" class="form-control" name="linkinstagram" id="linkinstagram" aria-describedby="helpId" placeholder="" />
            </div>
            <div class="mb-3">
                <label for="linktwitter" class="form-label">Twitter</label>
                <input type="text" value="<?php echo $linktwitter;?>" class="form-control" name="linktwitter" id="linktwitter" aria-describedby="helpId" placeholder="" />
            </div>
            <button type="submit" class="btn btn-success">Modificar</button>
            <a name=""id=""class="btn btn-primary"href="index.php"role="button">Cancelar</a>  
        </form>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>
<?php 
include("../../templates/footer.php");
?>