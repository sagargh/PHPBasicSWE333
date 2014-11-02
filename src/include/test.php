<?php
echo 'This is a testy '.$fruit;
//This is a testy 
echo '<br>';

include 'variable.php';//works as a global variable 
echo 'This is a testy '.$fruit;
//This is a testy Mango
echo '<br>';
function mango(){
	
	global $color;
	
	include 'variable.php';
	echo 'A '.$color .' '. $fruit;
}

mango(); //A Green Mango

echo 'A ' .$color .$fruit; //A Mango 


if ((include 'variable.php') == 'OK') {
	echo 'OK';
}
else
{
	echo 'Not OK';
}