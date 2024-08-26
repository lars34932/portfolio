<?php
require_once("config.php");
function db_connect(): PDO
{
    $servername = SERVERNAME;
    $username = USERNAME;
    $password = PASSWORD;
    $dbname = DBNAME;

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Fout bij het maken van de connection: " . $e->getMessage());
    }

    return $conn;
}
