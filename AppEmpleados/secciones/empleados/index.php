<?php include('../../template/header.php') ?>

<h3>Empleados</h3>
<a name="" id="" class="btn btn-primary" href="crear.php" role="button">Crear Empleado</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Foto</th>
            <th scope="col">CV</th>
            <th scope="col">Puesto</th>
            <th scope="col">Fecha Ingreso</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Alejandra</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>
                <a role="button" class="btn btn-primary">Carta</a>
                <a role="button" class="btn btn-warning">Editar</a>
                <a role="button" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>

    </tbody>
</table>

<?php include('../../template/footer.php') ?>