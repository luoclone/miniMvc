<?php
	namespace core;
	class Bootstrap{
		public static function run(){
			self::parseUrl();
		}
		public static function parseUrl(){
			if(isset($_GET['s'])){
				$info = explode('/',$_GET['s']);
				$class = 'web\controller\\'.ucfirst($info[0]);
				$action = $info[1];
			}else{
				//返回默认的控制器和方法
				$class = 'web\controller\Index';
				$action = 'index';
			}
			(new $class)->$action();
		}
	}
?>
