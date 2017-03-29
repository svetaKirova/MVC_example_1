<?php

class Router
{
    private $routes = [];

    public function  __construct()
    {
        $this->routes = include_once 'config/routes.php';
    }
    public function run()
    {
//        echo "<pre>"; print_r($this->routes); echo "</pre>"; echo 'Run router';
         // анализировать запрос - controller's method
        $handler = $this->getHandler();
        // взывать метод обработчика - Call handler's method
        $this->callHandler($handler);
    }
    private function getHandler()
    {
        $uri = trim($_SERVER['REQUEST_URI'], '/');
//        echo "<pre>"; print_r($uri); echo "</pre>";   die;
        foreach ($this->routes as $uriFromRoutes => $pattern) {
//          echo "<pre>"; print_r($uriFromRoutes); print_r($pattern);
            //var_dump($uri == $uriFromRoutes); // возвращ. true если ок
//          echo "</pre>";
            if ($uri == $uriFromRoutes) {
                break;
            }
        }
        //echo $pattern;  die;
        $parts = explode('/', $pattern);
        $controllerName = ucfirst($parts[0]) . 'Controller';
        $actionName = 'action' . ucfirst($parts[1]);

        include "controllers/{$controllerName}.php";
        $controller = new $controllerName();
        return [
            'controller' => $controller,
            'actionName' => $actionName
        ];
    }

    private function callHandler($handler)
    {
        $handler['controller']->$handler['actionName']();
    }
}