<?php

namespace App;

class Conn {
    public static function getDb() {
        // return new \PDO('mysql:host=db_project;dbname=projectdb','root','fortesenhaquesentidonaofaz');

        try {
            $conn = new \PDO('mysql:host=db_project;dbname=projectdb','root','fortesenhaquesentidonaofaz');
            return $conn;
        }
        catch(\PDOException $e) {
            var_dump($e->getMessage());
            exit;
        }
    }

}