<?php

namespace App\Controllers;

use App\Controllers\Controller;

use App\Models\Users;
use App\Conn;

use App\Auth;

class UserController extends Controller {
    
    public function logoutUser() {
        
        session_destroy();
        $this->redirect('/');

    }
    
    public function profileUser() {
        Auth::auth();
        $this->view->titlePage = "Seu perfil";
        $this->render('user/userProfile');
    }

    public function createUser() {
        $this->render('user/createUser');
    }

    public function insertUser() {

        // $proc = [
        //     'err' => null,
        //     'errNotice' => null
        // ];

        
        try {
            if( isset($_POST['user']) && isset($_POST['email']) && isset($_POST['pass']) ) {
            
                $user = new Users(Conn::getDB());
                $exec = $user->insert($_POST['user'], $_POST['email'], $_POST['pass']);

                // var_dump($exec);

                if( $exec === false ) {
                    throw new \Exception('Nome de Usuario ou senha já existem');
                }

                $_SESSION['signupStatus'] = "Conta criada com sucesso";
                Auth::loged($_POST['user']);
                $this->redirect('/perfil');
            }
            else {
                throw new \Exception('Erro ao criar a conta');
            }

        } catch(\Exception $e) {
            // $_SESSION['signupStatus'] = "Não foi possível criar a conta";
            $_SESSION['signupStatus'] = $e->getMessage();
            
            $this->redirect('/criar-conta');
            
        }
    }
}