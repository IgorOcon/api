<?php
class Core{

    public function exec(){

        //cria uma instancia do roteador
        $router = new Router();

        //adicionando rotas
        $router->addRoute('/',array(new homeController(),'index'));

        //iniciando
        $route = isset($_GET['route'])?'/'.$_GET['route']:'/';

        //lidando com a requisição
        $router->handleRequest($route);

    }
}
?>