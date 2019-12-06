<?php
require 'function.php';
class Task{
	public $description;

	public $completed = false;

	#automatically triggered on instantiation
	public function __construct($description)
	{
		$this -> description = $description;
	}

	public function complete()
	{
		$this -> completed = true;
	}
	public function isComplete()
	{
		return $this -> completed;
	}
	public function description()
	{
		return $this -> description;
	}
}

$task = new Task('Go to the store'); //a new task object

$task -> complete(); //complete the task

var_dump($task->isComplete());
//$task -> description; //couldn't access
var_dump($task);
#require 'index.view.php';

$tasks = [
	$task = new Task('Go to the store'),
	$task = new Task('Clean my room'),
	$task = new Task('Make dinner')
];

$tasks[0] -> complete();

require 'index.view.php';


dd($tasks);
