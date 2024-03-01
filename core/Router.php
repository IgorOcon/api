<?php
class Router{
    private $routes = array();

    //metodo para adicionar rota
    public function addRoute($route, $callback){
        $this->routes[$route] = $callback;
    }

    //metodo para lidar com a rota atual
    public function handleRequest($route){
        if(array_key_exists($route, $this->routes)){
            $callback = $this->routes[$route];
            if(is_callable($callback)){
                call_user_func($callback);
            
            }else{
                echo "Error: Callback is not a valid function.";
            }
        }else{
            echo "Error: route not defined.";
        }
    }
}
?>