<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'projet_kaguya');
define('DB_USER', 'root');
define('DB_PASS', '');

try {
    $pdo = newPDO("mysql:host=".DB_HOST.";dbaname=".DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die{"Erreur de connexion : " . $e->getMessage()};
    }