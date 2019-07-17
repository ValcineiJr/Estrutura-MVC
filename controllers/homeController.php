<?php 
	class homeController extends controller {

		public function index(){
			$dados = array();
			
			$this->loadViewTemplate('home', $dados);

		}		

	}


 ?>