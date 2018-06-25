<?php
class DAO
{
    protected static $db;
    public function __construct() {
        if(!isset(self::$db)){
            self::$db = new PDO("mysql:host=127.0.0.1;dbname=ritmosaudavel", "root", "root");
            self::$db->exec('SET CHARSET UTF8');
        }
    }
}