<?php


class Model {
    public static $DB;

    protected static function DB() {
        if (isset($DB)) {
            return $DB;
        }
        
        $dsn = 'mysql:host=mysql-vanestarregram.alwaysdata.net;dbname=vanestarregram_bd;charset=utf8';

        $database = new PDO($dsn, '223938', 'aaabbbccc1');
        
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        Model::$DB = $database;

        return $database;
    }


}


?>