<?php
$descricao = $_POST['descricaoPromo'];
$valor_min = $_POST['valor_min'];
$desconto = $_POST['descontoPromo'];

$strcon = mysqli_connect('localhost', 'root', '2008Roberto!', 'banco_teste');

if (!$strcon) {
    die('Não foi possível conectar ao MySQL');
}

$query = "INSERT INTO promocao (descricaoPromo, valor_min, descontoPromo) VALUES ('$descricao', '$valor_min', '$desconto ')";
if (mysqli_query($strcon, $query)) {
    echo "Promoção cadastrada com sucesso!";
} else {
    echo "Erro ao cadastrar promoção: " . mysqli_error($strcon);
}

mysqli_close($strcon);
?>