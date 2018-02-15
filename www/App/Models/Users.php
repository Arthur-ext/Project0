<?php

namespace App\Models;

use App\Models\Model;
use App\Conn;

class Users extends Model {
    
    protected $db;

    public function __construct(\PDO $db ) {
        $this->db = $db;
    }

    public function find($column = null, $item = null) {
        
        if(isset($column)&&isset($item)) {
            $query = "select * from users where {$column} = '{$item}'";
            $fetch = $this->db->query($query);
            return $fetch->fetchAll();

        }
        else {
            $query = "select * from users";
            $fetch = $this->db->query($query);
            return $fetch->fetchAll();
        }
    }

    public function insert($username, $email, $password) {
        $query = "insert into users (usr_username, usr_email, usr_password) values ('{$username}','{$email}','{$password}')";
        // return $query;
        return $this->db->exec($query);
    }

}