<?php

namespace App\Model;

class Connection {
    private static $instance;

    // Verify if alread exists a Connection instance
    public static function getConn() {
        if (!isset(self::$instance))
            self::$instance = new PDO('mysql:host=localhost;dbname=pdo;charset=utf8', 'root', ''); // Connection URL; User; Pasword
        else
            return self::$instance;
    }
}