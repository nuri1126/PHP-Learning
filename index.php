<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<style type="text/css">
		header {
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1><?php
			$greeting = 'Hi';
			#key & value pairs(sets of data to the server)
			#url example ==> localost:8888/?key=value
			#url example ==> localost:8888/?name=Nuri
			#url example ==> localost:8888/?name=<small>Nuri</snall>
			#Fetch data from the outside of world ><
			#!but this is malicious code, without security
			$name = $_GET['name']; //Nuri
			echo "Hello, world. ";
			echo "$greeting, $name";
			# if this is only php in the file don't need to close
			?>
		</h1>
		<h1>
			<?php
				#short version of above
				echo "Hello, " . $_GET['name'];
			?>
			<?=
				"Hello, " . $_GET['name'];
			?>
		</h1>
		<h1>
			<?=
				#function
				#sanitizing inputs. preventing situations
				"Hello, " . htmlspecialchars($_GET['name']);
				?>
		</h1>

	</header>
</body>
</html>
