<?php
class homeController extends controller{

	private $dados;

	public function __construct(){
		parent::__construct();
		$this->dados = array();
	}

	public function index(){

		$produto = new Produto();
		
		$this->dados['nome'] = 'Igor Daniel';

		$this->loadTemplate('home', $this->dados);
	}

	public function sobre(){

		$this->loadTemplate('sobre', $this->dados);
	}
}