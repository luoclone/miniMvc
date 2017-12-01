<?php
	namespace web\controller;
	use core\View;
	use Gregwar\Captcha\CaptchaBuilder;
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
		public function login(){
			return $this->view->make('login');
		}
		public function captcha(){
			header('content-type:image/jpeg');
			$builder = new CaptchaBuilder;
			$builder->build();
			$_SESSION['phrase'] = $builder->getPhrase();
			$builder->output();
		}
	}

?>
