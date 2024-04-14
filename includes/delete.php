<?php

require '../config/conn.php';
use MongoDB\Model\BSONIterator;


use MongoDB\BSON\Types\ObjectId;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];

  
    $deleteResult = $collection->deleteOne(['_id' => new ObjectID($id)]);

    if ($deleteResult->getDeletedCount() == 1) {
        echo "Contato deletado com sucesso!";
    } else {
        echo "Erro ao deletar contato.";
    }
}
?>
