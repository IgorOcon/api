<?php
class Core{

	public function exec(){

		//criando uma instancia do roteador
		$router = new Router();

		//configurar as rotas
		$router->addRoute('/', array(new homeController(), 'index'));

		//lidando com a requisição
		$route = isset($_GET['route'])?'/'.$_GET['route']:'/';

		$router->handleRequest($route);
	}

}
