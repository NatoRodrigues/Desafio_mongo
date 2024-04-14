<?php

$mongoClient = new MongoDB\Client("mongodb://localhost:27017");

$db = $mongoClient->test;
$collection->createCollection();
$collection = $db->clientes;
