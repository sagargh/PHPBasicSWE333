<?php
$maks = 125;

if($maks>=80){
	
	echo 'A+';
}
else {
	
	if($maks>=70)
	{
		echo 'A';
	}
	else
	{
		if($maks>=60)
		{
			echo 'B';
		}
		else
		{
			echo 'Fail';
		}
		
	
	}
}