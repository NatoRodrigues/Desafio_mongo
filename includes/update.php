<?php
require 'vendor/autoload.php';

require '../config/conn.php';

use MongoDB\BSON\ObjectId;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $updateResult = $collection->updateOne(
        ['_id' => new MongoDB\BSON\ObjectId($id)],
        ['$set' => [
            'name' => $name,
            'phone' => $phone,
            'email' => $email
        ]]
    );

    if ($updateResult->getModifiedCount() == 1) {
        echo "Contato atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar contato.";
    }
}
?>
