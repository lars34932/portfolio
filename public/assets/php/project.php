<?php
require_once("/var/www/html/source/connect.php");

$pdo = db_connect();
$stmt = $pdo->prepare('SELECT * FROM Projects')
$stmt->execute();
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($projects as $project) {
    echo 'test' . $project['name'] , 'cool';
}
