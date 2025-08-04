<?php
require_once('./config/config.php');

class User {
    public function getAllUsers() {
        global $pdo;
        $sql = "SELECT * FROM users";
        return $pdo->query($sql)->fetchAll();
    }
}