<?php
$ch=$_GET['op'];
$arr=array("Sophia"=>31,"Jacob"=>41,"William"=>39,"Ramesh"=>40);

switch($ch)
{
	
	case 1 : $p=asort($arr);
		 echo"Ascending order sort by value";
		 print_r($arr);
	         break;
	        
	case 2 : $p=ksort($arr);
		 echo"Ascending order sort by key";
		 print_r($arr);
                 break;
                
        case 3 : $p=arsort($arr);
		 echo"Descending order sort by value";
		 print_r($arr);
                 break;
                 
        case 4 : $p=krsort($arr);
		 echo"Descending order sort by key";
		 print_r($arr);
	         break;
}

?>
