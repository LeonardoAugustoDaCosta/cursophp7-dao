<?php 

spl_autoload_register(
	function($class_name){
		$dirClass = "class";
		$fileName = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $class_name . ".php");
		if (file_exists($fileName)){
			require_once($fileName);
		}
	})




?>