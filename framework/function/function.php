<?php
	require_once(dirname(__FILE__).'/../../'.'config.php');
	
	function C($name, $method){
		global $dir;
		require_once($dir.'/libs/Controller/'.$name.'Controller.class.php');
		eval('$obj = new '.$name.'Controller();$obj->'.$method.'();');
	}

	function M($name){
		require_once($dir.'libs/Model/'.$name.'Model.class.php');
		//$testModel = new testModel();
		eval('$obj = new '.$name.'Model();');
		return $obj;
	}
	
	function V($name){
		require_once($dir.'libs/View/'.$name.'View.class.php');
		//$testView = new testView();
		eval('$obj = new '.$name.'View();');
		return $obj;
	}
	
	function ORG($path, $name, $params=array()){// path ��·��  name�ǵ��������� params �Ǹ����ʼ����ʱ����Ҫָ������ֵ�����ԣ���ʽΪ array(������=>����ֵ, ������2=>����ֵ2����)
		require_once($dir.'libs/ORG/'.$path.$name.'.class.php');
		//eval('$obj = new '.$name.'();');
		$obj = new $name();
		if(!empty($params)){
		foreach($params as $key=>$value){
				//eval('$obj->'.$key.' = \''.$value.'\';');
				$obj->$key = $value;
			}
		}
		return $obj;
	}

	function daddslashes($str){
		return (!get_magic_quotes_gpc())?addslashes($str):$str;
	}

?>