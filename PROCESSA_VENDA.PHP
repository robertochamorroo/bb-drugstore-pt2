<?php
$idProduto = $_POST['idProduto'];
$data = $_POST['dataVenda'];
$valor = $_POST['valorVenda'];
$quantidade = $_POST['quantidadeVenda'];

$strcon = mysqli_connect('localhost', 'root', '2008Roberto!', 'banco_teste');

if (!$strcon) {
    die('Não foi possível conectar ao MySQL');
}

$query = "INSERT INTO venda (dataVenda, valorVenda, quantidadeVenda, idProduto) VALUES ('$data', '$valor', '$quantidade', '$idProduto')";
if (mysqli_query($strcon, $query)) {
    echo "Venda registrada com sucesso!";
} else {
    echo "Erro ao registrar venda: " . mysqli_error($strcon);
}

mysqli_close($strcon);
?>