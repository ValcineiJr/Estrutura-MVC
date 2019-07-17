<?php 
	class model{

		protected $db;

		public function model(){
			global $config;
			$this->db = new PDO('mysql:dbname='.$config['dbname'].';host='.$config['host'],$config['dbuser'],$config['dbpass']); 
		}

	}

 ?>