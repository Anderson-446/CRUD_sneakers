<?php
$id = 1;

$fp = fopen('sneakers.csv', 'r');

while (($row = fgetcsv($fp)) !== false) {
    $id++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneakers</title>
</head>
<style>
        table, tr, th, td {
            border: 1px solid gray;
            border-collapse: collapse;
        }
        td,th {
            padding: .5em;
        }
        table {
            margin-bottom: 1em;
        }

</style>
<body>
    <h1>Estoque de Sneakers</h1>
    <table>
        <tr> <!-- significa uma linha na tabela -->
            <th>ID</th> <!-- th = table header -->
            <th>Nome</th>
            <th>Marca</th>
            <th>Cor</th>
            <th>Tamanho</th>
        </tr>
        <?php $fp = fopen('sneakers.csv','r') ?>
        <?php while (($row = fgetcsv($fp)) !== false): ?>
            <tr>
                <td><?= $row[0] ?></td> <!-- table data = insere uma tabela -->
                <td><?= $row[1] ?></td>
                <td><?= $row[2] ?></td>
                <td><?= $row[3] ?></td>
                <td><?= $row[4] ?></td>
            </tr>
            <?php endwhile ?>
    </table>
    <form action="add.php" method="POST">
        <input type="number" name = "id" value="<?= $id;?>" readonly>
        <input type="text" name="nome" placeholder = "Nome">
        <input type="text" name = "marca" placeholder = "Marca">
        <input type="text" name = "cor" placeholder = "Cor">
        <input type="text" name = "tamanho" placeholder = "Tamanho">
        <button>Salvar</button>
    </form>
</body>
</html>