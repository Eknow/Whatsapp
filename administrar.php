<?php

include_once 'conexion.php';

$sql = "SELECT * FROM contacto";

$resultado = mysqli_query($con, $sql);
$num_filas = mysqli_num_rows($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>



    <title>Administrar contactos</title>
</head>

<body>
    <h1>Administrar contactos</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="row"></th>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>DIRECCCION</th>
                <th>E-MAIL</th>
                <th>TELEFONO</th>
                <th>CELULAR</th>
                <th>WHATSAPP</th>
                <th>ACCIONES</th>
            </tr>
        </thead>

        <?php
        while ($fila = mysqli_fetch_assoc($resultado)) {
        ?>
            <tbody>
                <tr>
                    <td scope="row"></td>
                    <td><?php echo $fila['id_contacto'] ?></td>
                    <td><?php echo $fila['nombre_suc'] ?></td>
                    <td><?php echo $fila['direccion'] ?></td>
                    <td><?php echo $fila['email'] ?></td>
                    <td><?php echo $fila['tel'] ?></td>
                    <td><?php echo $fila['cel'] ?></td>
                    <td><?php echo $fila['whatsapp'] ?></td>
                    <td><a href="actualizar.php?id=<?php echo $fila['id_contacto'] ?>">actualizar</a></td>
                </tr>
            </tbody>

    </table>

<?php
        }
?>
<h3>Numero de registros:<?php echo $num_filas ?></h3>
</body>

</html>