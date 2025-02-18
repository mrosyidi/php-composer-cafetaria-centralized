<?php 

    namespace Cafetaria\Config;

    class Database 
    {
        public static function getConnection(): \PDO 
        {
            $host = "localhost";
            $port = 3306;
            $database = "php_database_cafetaria";
            $username = "root";
            $password = "12345";
            return new \PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
        }
    }