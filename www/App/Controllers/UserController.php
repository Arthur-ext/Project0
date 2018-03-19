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

        $this->view->allUsers = $this->viewUsers();



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
            if( isset($_POST['user']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pass']) ) {
            
                $user = new Users(Conn::getDB());

                $insertData = array($_POST['user'], $_POST['username'], $_POST['email'], $_POST['pass']);

                $exec = $user->insert($insertData);

                if( $exec === false ) {
                    throw new \Exception('Nome de Usuario ou senha já existem');
                }

                $_SESSION['signupStatus'] = "Conta criada com sucesso";
                Auth::loged($_POST['username']);
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

    public function viewUsers() {
        $user = new Users(Conn::getDB());
        return $result = $user->find();

    }

    public function deleteUser() {
        $user = new Users(Conn::getDB());
        $user->delete();
        $this->logoutUser();

    }

    public function teste() {
        
        // $test = new Users(Conn::getDB());
        // var_dump($test->showTable());

        // echo "<br>";

        // $arrayTest = array("Arthur", "art_0502", "art@email.com", '1234');

        // $test->insert($arrayTest, ['usr_name', 'usr_username']);

        // var_dump($test->fields);

        echo "test field";
    }
}