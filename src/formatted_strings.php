<?php

$name = 'Sagar';
$age  = 27;

 $var = sprintf('My name is %s and age is %d', $name , $age);
 
 echo $var; //My name is Sagar and age is 27
 
 echo '<br>';
 
 $dated = sprintf('Today is %s %s and %d','7th','July','2014');
 
 echo $dated; // Today is 7th July and 2014
 
 // For preparing a break after printing someting
 function bre(){
 	
 	return '<br>';
 }
 $para = bre();
 echo $para;
 
 
 echo $dated; // Today is 7th July and 2014
 
 echo $para;
 
 echo $dated;
 
$result= sscanf("June 7th, 2014","%s %[^,],%d");
echo $para;
echo print_r($result);//Array ( [0] => June [1] => 7th [2] => 2014 ) 1

echo $para;


sscanf("June 7th, 2014","%s %[^,],%d" , $month, $day, $year);

echo $day; //7th



 


 
 
 
 
 
 