<?php include("../../templates/header.php"); ?>
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
                        <th scope="col">Descripcion</th>
                        <th scope="col">Enlace</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">1</td>
                        <td>Pet Nourish</td>
                        <td>Tienda de comida para mascotas</td>
                        <td>#productos</td>
                        <td>
                            <a name=""id=""class="btn btn-info"href="editar.php"role="button">Editar</a>
                            <a name=""id=""class="btn btn-danger"href="#"role="button">Borrar</a>
                        </td>
                    </tr>
                    <tr class="">
                    <td scope="row">1</td>
                        <td>Pet Nourish</td>
                        <td>Tienda de comida para mascotas</td>
                        <td>#productos</td>
                        <td>
                            <a name=""id=""class="btn btn-info"href="editar.php"role="button">Editar</a>
                            <a name=""id=""class="btn btn-danger"href="#"role="button">Borrar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include("../../templates/footer.php"); ?>