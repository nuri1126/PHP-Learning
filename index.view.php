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
			<strong>Status: </strong><?= $tasks['completed'] ? 'Completed' : 'Incompleted';?>
		</li>
	</ul>

</body>
</html>
