<?php

class Database
{
    public static function connect()
    {
        try {
            return new PDO(
                "mysql:host=localhost;dbname=bizcore;charset=utf8",
                "root",
                ""
            );
        } catch (PDOException $e) {
            die("DB ERROR: " . $e->getMessage());
        }
    }
}