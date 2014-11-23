<?php
$person = array(
		'first' => 'Alamgir',
		'last'  => 'Kabir',
		'job'   => 'Teacher'
		);

//var_dump($person);

echo '<br>';

//print_r($person);

echo '<br>';

//class and object

class Person{
	
	public $name;
	public $job;
	
	public function __construct($name, $job){
		
		$this->name = $name;
		$this->job  = $job;
	}
	
	public function communicate($style = 'voice'){
		
		return 'Communicating with ' . $style;
	}
}

$p = new Person('Sagar','Teacher');

//var_dump($p);//object(Person)#1 (2) { ["name"]=> string(5) "Sagar" ["job"]=> string(7) "Teacher" }

//echo $p->communicate(); //Communicating with voice

//echo $p->communicate('telepathy'); //Communicating with telepathy

$prsn = new stdClass;
$prsn->first = "Sagar";
$prsn->last = "Kabir";
$prsn->job = "Teacher";

//var_dump($prsn);//object(stdClass)#2 (3) { ["first"]=> string(5) "Sagar" ["last"]=> string(5) "Kabir" ["job"]=> string(7) "Teacher" }

$prsn = array(
		'first' => 'Sagar',
		'Last' => 'Kabir',
		'Job'  => 'Teacher'
		);

var_dump($prsn);//array(3) { ["first"]=> string(5) "Sagar" ["Last"]=> string(5) "Kabir" ["Job"]=> string(7) "Teacher" }





