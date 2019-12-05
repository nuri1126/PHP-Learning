<?php


#primitive collection of relative things --> Array
$animals = [
	'Pig',
	'Rabbit',
	'Cat',
	'Dog',
	'Monkey'
];

 #foreach
foreach ($animals as $animal) {
	echo $animal . ", ";
}


require 'index.view.php';
