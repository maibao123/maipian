<?php
	class indexController{
		function index(){
			session_start();
			echo '123321xxxx';
			
			print_r($_SESSION);
		}
		
		function test(){
			echo 321;
		}
		
	}
	
	
?>