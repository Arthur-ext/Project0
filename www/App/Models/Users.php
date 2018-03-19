<?php

namespace App\Models;

use App\Models\Model;
use App\Conn;

class Users extends Model {


    // public function insert($username, $email, $password) {
    //     $query = "insert into users (usr_username, usr_email, usr_password) values ('{$username}','{$email}','{$password}')";
    //     // return $query;
    //     return $this->db->exec($query);
    // }

    public function showTable() {
        return $this->table;
    }

}