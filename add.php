<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$marca = $_POST['marca'];
$cor = $_POST['cor'];
$tamanho = $_POST['tamanho'];

### Verificações de Integridade ###
$fp = fopen('sneakers.csv','r');
while (($row = fgetcsv($fp)) !== false) {
    if ($row[0] == $id) {
        http_response_code(400); // bad request
        echo "ID já cadastrado";
        exit();
    }
}

### Salvando ###

$fp = fopen('sneakers.csv','a');
fputcsv($fp,[$id,$nome,$marca,$cor,$tamanho]);

### Redirect ###e
http_response_code(302);
header('location:index.php');
?>
