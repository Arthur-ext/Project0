<?php

namespace App;

class Auth {
    public static function auth() {
        if($_SESSION['statusLogin'] === 0 || !isset($_SESSION['statusLogin'])) {
            $_SESSION['statusLogin'] = 0;
            $_SESSION['errorLogin'] = "Você não tem permissão de acessar a esta página";
            echo "<script language='JavaScript'>
                location.href='login'
                </script>";
            
        }
    }

    public static function loged($username = null) {
        $_SESSION['statusLogin'] = 1;
        
        if($_SESSION['username'] === null) {
           $_SESSION['username'] = $username;
        }
        else {
            $_SESSION['username'] = "(Nome de Usuário não informado)";
        }
    }
}