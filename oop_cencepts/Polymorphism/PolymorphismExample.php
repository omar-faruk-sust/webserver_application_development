<?php

abstract class Person
{
	abstract public function greet();
}

class English extends Person
{
	public function greet()
	{
		return 'Hello!';
	}
}

class Italian extends Person
{
	public function greet()
	{
		return 'Ciao!';
	}
}

class German extends Person
{
	public function greet()
	{
		return 'Hallo!';
	}
}

class French extends Person
{
	public function greet()
	{
		return 'Bonjour!';
	}
}


// Here all the instances of the classes
$people = [
	new English(),
	new German(),
	new Italian(),
	new French()
];

foreach ($people as $person) {
	echo $person->greet() . '<br>';
}
