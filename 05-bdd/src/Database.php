<?php
class Database
{   
    private static $pdo;

    public static function getInstance()
    {
        if(null === self::$pdo){
            self::$pdo = new PDO('mysql:host=127.0.0.1;dbname=php_poo;charset=utf8', 'root', '',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        }
        return self::$pdo;
    }
}
?>