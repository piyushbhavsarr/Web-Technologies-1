<?php

$arr=array(10,20,30,40,50);
echo "Before inserting elements in array,the array is : ";
print_r($arr);
$new=array(15,25);
$insert=array_splice($arr,3,0,$new);
echo "<br><br>After inserting elements in array,the array is : ";
print_r($arr);


/*OUTPUT-
Before inserting elements in array,the array is : Array ( [0] => 10 [1] => 20 [2] => 30 [3] => 40 [4] => 50 )

After inserting elements in array,the array is : Array ( [0] => 10 [1] => 20 [2] => 30 [3] => 15 [4] => 25 [5] => 40 [6] => 50 ) */

?>
