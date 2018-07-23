<?php
	define("APP_URL", "http://www.skymedasia.com/");
	define("APP_PATH", "/home/winai/domains/skymedasia.com/public_html/");
	define("APP_PATH_WP", "/home/winai/domains/skymedasia.com/public_html/wp/");
	
	function getArrUrl($var)
	  {
			$nvar = Array();
			$na = explode("/", $var);
			for($i=0; $i<count($na)-1;$i+=4)
			{
				$nvar["$na[$i]"] = $na[$i+1];
			}
			return $nvar;
	  }
	
	  $args = getArrUrl($_GET['args']);
?>


