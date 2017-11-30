<?php
	namespace web\controller;
	use core\View;
	class Index {
		protected $view;
		public function __construct(){
			$this->view = new View();
		}
		public function index(){
			return $this->view->make('index')->with('author','clone')->with('version','1.0')->with('position','index');
		}
		public function show(){
			return $this->view->make('show')->with('author','clone')->with('version','1.0')->with('position','show');
		}
		public function lst(){
			return $this->view->make('lst')->with('author','clone')->with('version','1.0')->with('position','lst');
		}
	}

?>
