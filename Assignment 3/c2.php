<?php

$s1=$_GET['str1'];
$s2=$_GET['str2'];
$ch=$_GET['op'];

switch($ch)
{
	case 1 : delete($s1);
	         break;
	        
	case 2 : insert($s1);
                 break;
                
        case 3 : replaces1($s1,$s2);
                 break;
                 
        case 4 : replaces2($s1,$s2);
                 break;
}

function delete($s1)
{
	$d=substr_replace($s1,' ',5,7);
	echo $d;
}

function insert($s1)
{
	$s3="dear";
	$i=substr_replace($s1,$s3,13,4);
	echo $i;
}


function replaces1($s1,$s2)
{
	$rep=substr_replace($s1,$s2,5,7);
	echo $rep;
}

function replaces2($s1,$s2)
{
	$re=substr_replace($s2,$s1,0,5);
	echo $re;
}

?>
