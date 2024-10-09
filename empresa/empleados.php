<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>
    <?php
    require 'auxiliar.php';
    $pdo = conectar();
    $stmt = $pdo->query('SELECT * 
                            FROM empleados JOIN departamentos USING (id)');
    ?>
    <table border="1">
        <thead>
            <th>Número</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Denominacion</th>
        </thead>
        <tbody>
            <?php foreach ($stmt as $fila): ?>
                <tr>
                    <td><?= $fila['numero'] ?></td>
                    <td><?= $fila['nombre'] ?></td>
                    <td><?= $fila['apellidos']?></td>
                    <td><?= $fila['denominacion']?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
     <?php
    // foreach ($stmt as $fila) {
    //     var_dump($fila);
    // }


    // $filas = $stmt->fetchAll($filas);
    // foreach ($filas as $fila) {
    //     var_dump($fila);


    // }
    // while ($fila = $stmt->fetch()) {
    //    var_dump($fila);
    // }
    ?>
</body>
</html>