<?php

namespace App\Controllers;

abstract class Controller {

    protected $view;

    public function __construct() {
        $this->view = new \stdClass;
    }

    protected function render(string $view) {        
        include_once "./App/Views/".$view.".php";
    }

    protected function redirect($page) {
        echo "<script language='JavaScript'>
                location.href='{$page}'
                </script>";
    }
}