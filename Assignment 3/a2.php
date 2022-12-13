<?php
$str=$_GET['s'];
$ch=$_GET['op'];
switch($ch)
{
	case 1 : length($str);
		 break;
		 
	case 2 : vowels($str);
		 break;
		 
	case 3 : lowercase($str);
		 break;
		 
	case 4 : padding($str);
		 break;
		 
	case 5 : remove_whitespace($str);
	         break;	
	         
	case 6 : reverse($str);
	         break;	 
}

function length($str)
{
	$i=0;
	while($str[$i]!=NULL)
	{
		$i++;
	}
	echo"Length of string : $i";
}
	
function vowels($str)
{
	$c=strspn($str,"aeiou");
	echo"Total no.of vowels are : $c";
}

function lowercase($str)
{
	$a=strtolower($str);
	echo"\n Lowecase : $a";
	$b=UCwords($str);
	echo "\n Titlecase : $b";
}

function padding($str)
{
	$d=str_pad($str,15,"*",STR_PAD_BOTH);
	echo"Padding both sides : $d";
}

function remove_whitespace($str)
{
     	$r=ltrim($str);
	echo"Remove whitespace : $r";
}	
	
function reverse($str)
{
	$l=strrev($str);
	echo"Reverse of string : $l";
}

?>	
	
