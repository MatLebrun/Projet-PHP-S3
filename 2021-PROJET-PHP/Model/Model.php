<?php


class Model {
    public static $DB;

    protected static function DB() {
        if (isset($DB)) {
            return $DB;
        }

        $dsn = 'mysql:host=localhost:3306;dbname=projet-php_1;charset=utf8';

        $database = new PDO($dsn, 'root', '');

        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        Model::$DB = $database;

        return $database;
    }


}


?>