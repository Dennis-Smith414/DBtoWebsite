<?php
try {
    $pdo = new PDO('sqlite:mydatabase.db');
    echo 'PDO is installed';
} catch (PDOException $e) {
    echo 'PDO error: ' . $e->getMessage();
}
?>