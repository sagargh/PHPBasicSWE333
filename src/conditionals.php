<?php
$a = 5;
$b = 6;

if ($a>$b)
{
	echo 'a is greater than b';
}
else 
{
	echo 'b is greater than a';
}

// b is greater than a

echo '<br>';
echo '<br>';
$marks = 65;
if ($marks>= 80) {
	echo 'You got A+';
}
else{
	if ($marks>= 70)
	{
		echo 'You got A';
	}
	else
	{
		if($marks>= 60){
			echo 'You got A-';
		}
		else{
			if($marks>= 50)
			{
				echo 'You got B';
			}
			else
			{
				echo 'You failed';
			}
		}
	}
}

echo '<br>';
echo '<br>';
echo '<br>';


$month = 'January';

switch ($month) {
	case 'January':
	echo 'This is January month';
	break;
	
	default:
		echo 'This is another month';
	break;
}

echo '<br>';
echo '<br>';
echo '<br>';

$first_name = 'Alamgir';

$first_name = array(

		'Alamgir' => 'Its sagar\'s first name',
		'Kabir'	  => 'Its sagar\'s last name',
		'Sagar'   => 'Its sagar\'s nick name'
);
echo $first_name['Sagar'];

echo '<br>';
echo '<br>';
echo '<br>';

$month = 'January';

if($month== 'June' && $month!== 'July')
{
	echo 'This is not January';
}

else {
	
	echo 'This is january';
}





