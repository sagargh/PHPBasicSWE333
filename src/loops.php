<?php

//$arr = array('Touhid Bhuiyan','Mijanur Rahman','Shikha Arniban','Kaushik Sarkar');


/* foreach ($arr as $name){
	
	echo $name;
} */
//output: Touhid BhuiyanMijanur RahmanShikha ArnibanKaushik Sarkar



/* foreach ($arr as $name)
{
	echo '<li>'.$name.'</li>';
} */
/* Touhid Bhuiyan
 Mijanur Rahman
Shikha Arniban
Kaushik Sarkar  [with unorder list]*/

$arr = array(
		'Head Sir' => 'Touhid Bhuyian',
		'Senior Lecturer1' => 'Mijanur Rahman',
		'Senior Lecturer2' => 'Shikha Anirban',
		'Lecturer1'        => 'Kaushik Sarkar',
		'Lecturer2'		   => 'Alamgir Kabir',	
		'LecturerN'		   => 'Aro Oneke');
		
 		
foreach($arr as $title=>$name){
	
	echo "<li><strong>$title </strong> - $name </li>";
	
} 





