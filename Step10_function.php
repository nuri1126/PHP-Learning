<?php
function dumper($one, $two, $three){
	var_dump($one, $two, $three);
}

#die and dump function
function dd($data){
	echo '<pre> ';
	die(var_dump($data));
	echo "</pre>";
}

function acceptable_age($age){
	echo '<pre> ';
	if($age<20)
		echo "you are not allowed";
	else
		echo "you are allowed";
	echo "</pre>";
}
