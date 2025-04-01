<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Lectura de Base de Datos</h3>
    <h4>bucle fetch_assoc</h4>
    <?php
        include ("abre.php");
        $consulta = "SELECT * FROM empleados";
        $resultado = $conexion->query($consulta);
        $a=1;
        while($row  = $resultado->fetch_assoc()){
    ?>
        <tr>
            <td><?php echo ++a ?></td>
            <td><?php echo $row['nombre']; ?></td>
        </tr>
    <?php
        }
    ?>

    ?>
</body>
</html>