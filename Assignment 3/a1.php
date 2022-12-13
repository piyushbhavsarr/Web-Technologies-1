<?php
$a=$_GET['num1'];
$b=$_GET['num2'];
$ch=$_GET['op'];
switch($ch)
{
	case 1 : mod($a,$b);
		 break;
		 
	case 2 : power($a,$b);
		 break;
		 
	case 3 : sumN($a);
		 break;
		 
	case 4 : fact($b);
		 break;
}

function mod($a,$b)
{
	$c=$a%$b;
	echo "Mod of first and second number : ";
	echo $c; 
}

function power($a,$b)
{
	$ans=1;
	$n1=$a;
	while($n1>0)
	{
		$ans=$ans*$b;
		$n1--;
	}
	echo "$b raised to power $a : $ans\n";
}

function sumN($a)
{
	$n2=$a;
	$n=$n2;
	$sum=0;
	while($n>=0)
	{
		$sum=$sum+$n;
		$n--;
	}
	echo "Sum of $n2 numbers is $sum\n";	
}

function fact($b)
{
	$n2=$b;
	$facto=1;
	for($x=$n2;$x>=1;$x--)
	{
		$facto=$facto*$x;
	}
	echo "Factorial of $b is $facto\n";
}
?>
