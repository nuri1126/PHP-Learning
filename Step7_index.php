<?php

$animals = ['dog', 'cat'];
$person = [
	31, 'brown'
];
$person2 = [
	'age' => 100,
	'hair' => 'black',
	'career' => 'sw engineer'
];

#append
$animals[] = 'rabbit';
$person2['name'] = "Nuri";

#this doesnot work
#echo $person2;

#get rid of specific value
unset($person2['age']);

#formatting
echo '<pre>';
#dump the value for anything and everything
var_dump($person2);

echo'</pre>';

#dd();
die('this file doex not work after die() function');
#comment out == don't want to execute ==> // or #
require 'index.view.php';
