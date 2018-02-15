<?php

namespace SON\Init;

abstract class Bootstrap {

    private $routes;
    
        public function __construct() {
            
            $this->initRoutes();
            $this->run($this->getUrl());
        }

                /**
         * Create routes with params: 
         * - route = uri_path
         * - controller = responsible controller
         * - action = responsible function for route
         *
         * @return void
         */
        abstract protected function initRoutes();

        
        /**
         * get url ...
         *
         * @return string
         */
        protected function getUrl() {
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }    
    
        protected function setRoutes(array $routes) {
            $this->routes = $routes;
        }
    
        protected function run($url) {
            
            array_walk( $this->routes, function ($route) use ($url){
                if( $url == $route['route'] ) {
                    $class =  "App\\Controllers\\".ucfirst($route['controller']);
                    $action = $route['action'];
                    
                    // instance a class and execute an action
                    $controller = new $class;
                    $controller->$action();
                }
            } );
        }
     
}