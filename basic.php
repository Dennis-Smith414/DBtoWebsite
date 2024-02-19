<?php
    $pdo = new PDO('sqllite:qoutesTest.db');
    
    $statement = $pdo->query("SELECT * FROM qoutesFull");

    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

    var_dump($rows);