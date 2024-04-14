<?php
require '../config/conn.php';

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Insere os dados na coleção 'contacts'
    $insertOneResult = $collection->insertOne([
        'name' => $name,
        'phone' => $phone,
        'email' => $email
    ]);

    // Verifica se a inserção foi bem-sucedida
    if ($insertOneResult->getInsertedCount() == 1) {
        echo "Contato adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar contato.";
    }
}
?>
