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
	<ul>
		<?php
			foreach ($animals as $name) {
				echo "<li>$name</li>";
			}
		?>
		<?=
			foreach ($animals as $animal) {
			echo "<li>$animal</li>";
			}

		#Why this doesn't work?
		#<?=
		#	foreach ($animals as $animal) {
		#	echo "<li>$animal</li>";
		#	}
		#?>
	</ul>
</body>
</html>
