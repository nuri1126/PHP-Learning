<?php


#primitive collection of relative things --> Array
$names = [
	'Nuri',
	'Felix',
	'Adina'
];

 #foreach
#foreach ($array as $item ) {}

foreach ($names as $name) {
	echo $name . ',';
}
require 'index.view.php';
