<?php

$arr=array(10,20,30,40,50);

$ch=$_GET['op'];

switch($ch)
{
	case 1 : ins($arr);
	         break;
	        
	case 2 : del($arr);
                 break;
                
        case 3 : dis($arr);
                 break;
                 
        case 4 : ins1($arr);
                 break;
                 
        case 5 : del1($arr);
                 break;
                 
        case 6 : dis1($arr);
                 break;
}

function ins($arr)
{
	$p=Array_push($arr,60);
	print_r($arr);
}

function del($arr)
{
	$q=Array_pop($arr);
	print_r($arr);
}

function dis($arr)
{
	print_r($arr);
}

function ins1($arr)
{
	$r=Array_unshift($arr,70);
	print_r($arr);
}

function del1($arr)
{
	$s=Array_shift($arr);
	print_r($arr);
}

function dis1($arr)
{
	print_r($arr);
}

?>
	
	
