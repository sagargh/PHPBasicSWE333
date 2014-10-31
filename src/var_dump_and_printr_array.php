<?php
$first_day = "Sunday";
$second_day = "Monday";
$third_day = "Tuesday";
// not need to declear each variable
// we can declear in one variable - it may be variable day

$day = array('Saturday','sunday','Monday','Tuesday','Wednesday','Thursday','Firday');
var_dump($day);

//array(7) { [0]=> string(8) "Saturday" [1]=> string(6) "sunday" [2]=> string(6) "Monday" [3]=> string(7) "Tuesday" [4]=> string(9) "Wednesday" [5]=> string(8) "Thursday" [6]=> string(6) "Firday" 
echo '<br>';
echo '<br>';
print_r($day);

//Array ( [0] => Saturday [1] => sunday [2] => Monday [3] => Tuesday [4] => Wednesday [5] => Thursday [6] => Firday ) 
echo '<br>';
echo '<br>';
print $day[0];
//Saturday
echo '<br>';
echo '<br>';
print $day[1];
//sunday
echo '<br>';
echo '<br>';
print "Hello". " ".$day[6];

//Hello Firday
/* The var_dump function displays structured information about variables/expressions including its type and value. Arrays are explored recursively with values indented to show structure. It also shows which array values and object properties are references.

The print_r() displays information about a variable in a way that's readable by humans. array values will be presented in a format that shows keys and elements. Similar notation is used for objects.*/
