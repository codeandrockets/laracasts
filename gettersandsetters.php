<?php

class Person {

	public $name;

	public $age;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getAge()
	{
		return $this->age * 365;
	}

	public function setAge($age)
	{
		if ($age < 18)
		{
			throw new Exception("Person is not old enough.");
		}
		$this->age = $age;
	}
}

$steven = new Person("Steven Jasionowicz");


$steven->setAge(26);
var_dump($steven->getAge());