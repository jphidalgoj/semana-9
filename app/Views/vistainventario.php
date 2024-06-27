<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>este es el resultado del select inventario</h1>
    <table>
        <tr>
            <td>ID</td>
            <td>TITULO</td>
            <td>DESCRIPCION</td>
        </tr>
        <?php foreach($keyselectbdd as $key): ?>
        <tr>
            <td><?php echo $key->inv_id?></td>
            <td><?php echo $key->inv_titulo?></td>
            <td><?php echo $key->inv_description?></td>
        </tr>
        <?php endforeach?>
    </table>
</body>
</html>