<?php
$host = "localhost";
$dbname = "crud_lato_server";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    logVolontariato("CRITICAL" . "Errore durante la connessione: " .$e->getMessage());
    echo "Errore durante la connessione al Database";
}
?>