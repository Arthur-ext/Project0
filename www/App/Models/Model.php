<?php

namespace App\Models;

class Model {
    
    protected $db;
    protected $table;
    protected $fields;


    public function __construct(\PDO $db ) {
        $this->db = $db;
        $this->table = strtolower(array_pop(explode("\\", get_class($this))));
        $this->getFieldsTable();
    }

    public function find($column = null, $item = null) {
        
        if(isset($column)&&isset($item)) {
            $query = "select * from {$this->table} where {$column} = '{$item}'";
            $fetch = $this->db->query($query);
            return $fetch->fetchAll();

        }
        else {
            $query = "select * from {$this->table}";
            $fetch = $this->db->query($query);
            return $fetch->fetchAll();
        }
    }
    /**
     * Delete a field in the table (only user at the moment)
     *
     * @return int
     */
    public function delete() {

        $query = "delete from {$this->table} where usr_username = '{$_SESSION['username']}'";

        return $this->db->exec($query);

    }
    
    /**
     * insert user in table
     *
     * @param array $insFields
     * @param array $useFields: choose column in insert (choose all columns, that has a not null constraint)
     * @return int
     */
    public function insert(array $insFields, array $useFields = null) {

        switch ($useFields) {
            case null:
                $fieldsTable = implode(",", $this->fields);
                // echo "Default";
                break;
            case isset($useFields):
                $fieldsTable = implode(",", $useFields);
                // echo "chose fields";
                break;
        }

        foreach($insFields as $field) {
            $insertFields[] = "'{$field}'";
        }
        $fields = implode(",", $insertFields);
        
        $query = "insert into {$this->table} ({$fieldsTable}) values ({$fields})";
        print_r($query);
        // // return $query;
        // return $this->db->exec($query);
    }

    public function getFieldsTable() {
        $columns = $this->db->prepare("DESC {$this->table}");
        $columns->execute();
        $fields = $columns->fetchAll(\PDO::FETCH_COLUMN);
        
        foreach($fields as $key => $field) {
            if(substr($field, -2) == "id") {
                unset($fields[$key]);
                // var_dump($fields);
            }
        }
        
        $this->fields = $fields;
    }

}