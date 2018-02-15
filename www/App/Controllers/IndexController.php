<?php

namespace App\Controllers;

use App\Controllers\Controller;

use App\Models\Users;
use App\Conn;

class IndexController extends Controller {
    
    public function index() {
        $this->view->hello = "Variavel do controller";

        // $users = new Users(Conn::getDb());
        // $this->view->users = $users->fetchAll();
        
        $this->render('home');
        
    }

    public function contact() {
        $this->render('contact');
    }
}