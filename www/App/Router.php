<?php

namespace App;

use SON\Init\Bootstrap;

class Router extends Bootstrap {

    /**
     * Create routes with params: 
     * - route = uri_path
     * - controller = responsible controller
     * - action = responsible function for route
     *
     * @return void
     */
    protected function initRoutes() {
        $routes['home'] = array( 'route' => '/', 'controller' => 'indexController', 'action' => 'index' );
        $routes['contact'] = array( 'route' => '/contact', 'controller' => 'indexController', 'action' => 'contact' );
        $routes['login'] = array( 'route' => '/login', 'controller' => 'LoginController', 'action' => 'login' );
        $routes['authLogin'] = array( 'route' => '/authLogin', 'controller' => 'LoginController', 'action' => 'authenticateLogin' );
        
        $routes['logoutUser'] = array( 'route' => '/logout', 'controller' => 'UserController', 'action' => 'logoutUser' );
        $routes['userProfile'] = array( 'route' => '/perfil', 'controller' => 'UserController', 'action' => 'profileUser' );
        $routes['createUser'] = array( 'route' => '/criar-conta', 'controller' => 'UserController', 'action' => 'createUser' );
        $routes['insertUser'] = array( 'route' => '/criando-usuario', 'controller' => 'UserController', 'action' => 'insertUser' );
        $routes['deleteUser'] = array( 'route' => '/delete-user', 'controller' => 'UserController', 'action' => 'deleteUser' );


        $routes['teste'] = array( 'route' => '/teste', 'controller' => 'UserController', 'action' => 'teste' );
        $this->setRoutes($routes);
    }
   
}