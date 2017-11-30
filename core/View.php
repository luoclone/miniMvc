<?php

	namespace core;
	class View{
		protected $vars = [];
		protected $file = '';
		public function make($file){
			$this->file = $file;
			return $this;
		}
		public function with($key,$value){
			$this->vars[$key] = $value;
			return $this;
		}
		public function __toString(){
			extract($this->vars);
			include 'view/'.$this->file.'.html';
			return '';
		}
	}
?>
