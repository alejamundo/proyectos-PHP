<?php
//url Base
$url_base='http://localhost/PHP/AppEmpleados/';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $url_base?>">Sistema Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo $url_base?>secciones/empleados/">Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $url_base?>secciones/puestos/">Puestos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo $url_base?>secciones/usuarios/">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo $url_base?>cerrar.php">Cerrar sesión</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <br>
    <main class="container">