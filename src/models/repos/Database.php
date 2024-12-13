<?php
abstract class Database
{
    private static $instance;

    protected static function getInstance()
    {
        try {
            self::$instance = new PDO("mysql:host=127.0.0.1;dbname=pokedb", "root");
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
        return self::$instance;
    }

    protected static function disconnect()
    {
        self::$instance = null;
    }
}
