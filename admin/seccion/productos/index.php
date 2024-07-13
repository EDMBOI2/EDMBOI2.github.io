<?php 
include("../../bd.php");

if (isset($_GET["txtID"])) {
    $txtID = (isset($_GET["txtID"])) ? $_GET["txtID"] : "";
    
    // Proceso de borrado que busque la imagen y la pueda borrar.
    $sentencia = $conexion->prepare("SELECT * FROM `tbl_productos` WHERE ID = :id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $registro_foto = $sentencia->fetch(PDO::FETCH_LAZY);

    if (isset($registro_foto['foto'])) {
        if (file_exists("../../images/productos/" . $registro_foto['foto'])) {
            unlink("../../images/productos/" . $registro_foto['foto']);
        }
    }

    // Borrar en la base de datos
    $sentencia = $conexion->prepare("DELETE FROM tbl_productos WHERE ID = :id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();

    header("Location: index.php");
}

$sentencia=$conexion->prepare("SELECT * FROM `tbl_productos`");
$sentencia->execute();
$lista_productos= $sentencia->fetchAll(PDO::FETCH_ASSOC);
include ("../../templates/header.php"); ?>
 <br>
<div class="card">
    <div class="card-header">
        <a name=""id=""class="btn btn-primary"href="crear.php"role="button">Agregar registros</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">

                <?php foreach($lista_productos as $registro){ ?>

                    <td><?php echo $registro["ID"]; ?></td>
                    <td><?php echo $registro["nombre"]; ?></td>
                    <td><?php echo $registro["descripcion"]; ?></td>
                    <td><img src="../../images/productos/<?php echo $registro['foto']; ?>" whidyh="50" alt="" srcrset=""></td>
                    <td><?php echo $registro["precio"]; ?></td>

                    <td>
                        <a name=""id=""class="btn btn-info"href="editar.php?txtID=<?php echo $registro['ID']; ?>"role="button">Editar</a>
                        <a name=""id=""class="btn btn-danger"href="index.php?txtID=<?php echo $registro['ID']; ?>"role="button">Borrar</a>
                    </td>
                    </tr>
                <?php } ?>    
                
            </tbody>

            </table>
        </div>
    </div>
</div>

<?php include ("../../templates/footer.php"); ?>
