<?php
        $pdo = new PDO('sqlite:qoutesTest.db');
    
    $statement = $pdo->query("SELECT * FROM qoutesFull");

    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

    var_dump($rows);