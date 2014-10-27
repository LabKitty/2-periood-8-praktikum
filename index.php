$_COOKIE
	<?php
		$name = "Test";
		$value = 45;
		$expire = time () + 3600;
			
		//setcookie($name, $value, $expire); 
		//setcookie("teine", "tere", time() + 10);
		//setcookie($name);
		//setcookie($name, null);
		setcookie($name, $value, time() - 3600);
	?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
	<title>2. periood 8. praktikum Cookie</title>
	
</head>
<body>
	<pre>
		<?php
			print_r($_COOKIE);
			/*
			if (isset($_COOKIE["test"])) {
				$test = $_COOKIE["test"];
			} else {
				$test = "" ;
			}
			*/
			$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";
			echo $test;
		?>
	</pre>	
	
</body>
</html>