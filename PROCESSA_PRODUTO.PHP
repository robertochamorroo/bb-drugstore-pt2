<?php
$id = $_POST['idProduto'];
$nome = $_POST['nomeProduto'];
$preco = $_POST['precoProduto'];
$quantidade = $_POST['quantidadeProduto'];

$strcon = mysqli_connect('localhost', 'root', '2008Roberto!', 'banco_teste');

if (!$strcon) {
    die('Não foi possível conectar ao MySQL');
}

$query = "INSERT INTO produto (nomeProduto, precoProduto, quantidadeProduto) VALUES ('$nome', '$preco', '$quantidade')";
if (mysqli_query($strcon, $query)) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar produto: " . mysqli_error($strcon);
}

mysqli_close($strcon);
?>