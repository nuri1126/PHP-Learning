<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
	<?= #make each words uppercase
		#more functions --> php.net
		ucwords("hello my name is nuri");
	?>
	<ul>
		<?php foreach ($tasks as $task => $value) : ?>
		<li>
			<strong>
			<?= #upper case
				ucwords($task)
			?>: </strong>
			<?= $value?>
		</li>
		<?php endforeach; ?>

	</ul>

	<ul>
		<li>
			<strong>Name: </strong><?= $tasks['title'];?>
		</li>
		<li>
			<strong>Due: </strong><?= $tasks['due'];?>
		</li>
		<li>
			<strong>Personal Responsible: </strong><?= $tasks['assigned_to'];?>
		</li>
		<li>
			<strong>Status: </strong>
			<?=
				//ternary operator
				$tasks['completed'] ? 'Completed' : 'Incompleted';
			?>
			<?php
			//HTML unicode reference
			//https://www.w3schools.com/charsets/ref_utf_dingbats.asp
			//! --> bang, punctuation mark == not
			//if(! true) --> not true
				if($tasks['completed']){

					echo '&#9989;';
				}
				else
					echo "&#x274E";
			?>

			<?php if($tasks['completed']) : ?>
				<span class="icon">&#9989;</span>
			<?php else : ?>
				<span class="icon">&#x274E;</span>
			<?php endif; ?>

		</li>
	</ul>

</body>
</html>
