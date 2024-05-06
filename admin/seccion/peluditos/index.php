<?php
include("../../bd.php");
$sentencia=$conexion->prepare("SELECT * FROM `tbl_peluditos`");
$sentencia->execute();
$lista_peluditos= $sentencia->fetchAll(PDO::FETCH_ASSOC); 
include("../../templates/header.php");
?>
<br/>
<div class="card">
    <div class="card-header">
        <a name=""id=""class="btn btn-primary"href="crear.php"role="button">Agregar registros</a>
    </div>
    <div class="card-body">
        <div
            class="table-responsive-sm"
        >
            <table
                class="table"
            >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Redes Sociales</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($lista_peluditos as $key => $value){?>
                        <tr class="">
                            <td scope="row"><?php echo $value['ID']; ?></td>
                            <td><?php echo $value['titulo']; ?></td>
                            <td>
                                <img src="../../../images/peluditos/<?php echo $value['foto']; ?>" whidyh="50" alt="" srcrset=""></td>
                                
                            <td><?php echo $value['descripcion']; ?></td>
                            <td><?php echo $value['linkfacebook']; ?><br/>
                                <?php echo $value['linkinstagram']; ?><br/>
                                <?php echo $value['linktwitter']; ?>
                            </td>
                            <td>
                                <a name=""id=""class="btn btn-info"href="editar.php?txtID=<?php echo $value['ID']; ?>"role="button">Editar</a>
                                <a name=""id=""class="btn btn-danger"href="index.php?txtID=<?php echo $value['ID']; ?>"role="button">Borrar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include("../../templates/footer.php"); ?>