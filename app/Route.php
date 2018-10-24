<?php 
use App\Repository\AppRepository;

class Route{

    public static function index()
    {    

          if(!isset($_SESSION)) {
            session_start();
        }

         $uri = $_SERVER['REQUEST_URI'];
          //extract controller and action from uri
           $controller='';
           $action='';

           if (isset(explode('/', $uri)[1]) and isset(explode('/', $uri)[2]) ) {
              list(, $controller, $action) = explode('/', $uri);
           }

          self::routeAction($controller, $action);      
    }

    public static function routeAction($controller, $action)
    {
        $controller=($controller)?:'index';
        $action=($action)?:'index';

        $controller = "App\Controllers\\".ucfirst($controller)."Controller";
        $action = "{$action}Action";
        
        if (class_exists($controller)) {
            $controller = new $controller();
            if (method_exists($controller, $action)) {
                $controller->$action();
                
            }
        } 
     }

}
