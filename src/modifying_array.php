<?php
$month = array('Jan','Feb','Mar','April','May','Jun');
print_r($month);
//outout: Array ( [0] => Jan [1] => Feb [2] => Mar [3] => April [4] => May [5] => Jun )


echo '<br>';
echo '<br>';
echo '<br>';
var_dump($month);
//outout: array(6) { [0]=> string(3) "Jan" [1]=> string(3) "Feb" [2]=> string(3) "Mar" [3]=> string(5) "April" [4]=> string(3) "May" [5]=> string(3) "Jun" }


echo '<br>';
echo '<br>';
echo '<br>';

$new_month = 'July';

//array_push means add new item in the array
array_push($month, $new_month);

print_r($month);

//output: Array ( [0] => Jan [1] => Feb [2] => Mar [3] => April [4] => May [5] => Jun [6] => July )

$month1= array_pop($month);
echo '<br>';
echo '<br>';
echo '<br>';
echo $month1;//output: July
echo '<br>';
echo '<br>';
echo '<br>';
print_r($month);// output: Array ( [0] => Jan [1] => Feb [2] => Mar [3] => April [4] => May [5] => Jun )

array_shift($month);
echo '<br>';
echo '<br>';
echo '<br>';
print_r($month);//output: Array ( [0] => Feb [1] => Mar [2] => April [3] => May [4] => Jun )

echo '<br>';
echo '<br>';
echo '<br>';

array_shift($month);

echo '<br>';
echo '<br>';
echo '<br>';

print_r($month);//output:Array ( [0] => Mar [1] => April [2] => May [3] => Jun )
$add_new_month = 'January';
array_unshift($month, $add_new_month);

echo '<br>';
echo '<br>';
echo '<br>';

print_r($month);//output: Array ( [0] => January [1] => Mar [2] => April [3] => May [4] => Jun )

$output= array_slice($month, 2);

echo '<br>';
echo '<br>';
echo '<br>';

print_r($output);//output: Array ( [0] => April [1] => May [2] => Jun )

echo '<br>';
echo '<br>';
echo '<br>';
$output= array_slice($month, 1,2);

print_r($output);//output: Array ( [0] => April [1] => May [2] => Jun ) 

echo '<br>';
echo '<br>';
echo '<br>';
$output1 = array_filter($month,function($string){return strlen($string)== 3;} ); 


print_r($output1);//output: Array ( [0] => April [1] => May [2] => Jun ) 

