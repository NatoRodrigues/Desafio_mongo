<?php
require '../config/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

  
    $insertOneResult = $collection->insertOne([
        'name' => $name,
        'phone' => $phone,
        'email' => $email
    ]);
    
    if ($insertOneResult->getInsertedCount() == 1) {
        echo "Contato adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar contato.";
    }
}
?>
