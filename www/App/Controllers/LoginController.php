<?php

namespace App\Controllers;

use App\Controllers\Controller;

use App\Models\Users;
use App\Conn;

class LoginController extends Controller {

    public function login() {
        
        $this->render('login/login');
    }

    public function authenticateLogin() {
        
        // Make sure the form was used        
        if(isset($_POST['user']) && isset($_POST['pass'])) {
            
            $user = new Users(Conn::getDb());
            $list = $user->find('usr_username', $_POST['user']);
            $user = $list[0];
            
            // Make sure that user was exists
            if($_POST['user'] == $user['usr_username'] && $_POST['pass'] == $user['usr_password']) {
                
                $_SESSION['statusLogin'] = 1;
                $_SESSION['username'] = $user['usr_username'];
                
                if(isset($_SESSION['errorLogin'])){
                    unset($_SESSION['errorLogin']);
                }

                $this->redirect('perfil');
            }
            else {
                
                $_SESSION['statusLogin'] = 0;
                $_SESSION['errorLogin'] = "Erro de autenticação!";

                $this->redirect('login');
            }
        }
        else {
            
            $_SESSION['errorLogin'] = "Erro ao realizar o login";
            $this->redirect('login');
        }
        
        
    }

}