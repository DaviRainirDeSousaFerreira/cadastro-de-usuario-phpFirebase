<?php
// Incluindo o arquivo de configuração do Firebase
require 'config.php';  // Certifique-se de que o caminho está correto

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura os dados do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Salvar os dados no Firebase
    $newPost = $database
        ->getReference('users')  // Referência ao nó "users" no Firebase
        ->push([  // Insere os dados no Firebase
            'name' => $name,
            'email' => $email,
        ]);

    // Exibe uma mensagem de sucesso
    echo 'Cadastro realizado com sucesso!';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Firebase</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form method="POST">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
