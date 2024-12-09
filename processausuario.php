<?php
// processa_usuario.php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    // Conexão com o banco de dados
    $strcon = mysqli_connect('localhost', 'root', '2008Roberto!', 'banco_teste');

    if (!$strcon) {
        die('Não foi possível conectar ao MySQL');
    }

    // Prepara a consulta para evitar SQL Injection
    $stmt = $strcon->prepare("INSERT INTO usuario (nomeUsuario, senhaUsuario, emailUsuario) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $senha, $email);

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário: " . $stmt->error;
    }

    $stmt->close();
    mysqli_close($strcon);
} else {
    echo "Método de requisição inválido.";
}
?>