<?php
$a=$_GET['stud'];
$b=$_GET['clg'];
$c=$_GET['msg'];
/*
//if($a==NULL)
	args($a);
	/*else if( $b==NULL)
		{args($a,$c);
		}else if($c==NULL)
			{args($a,$b);
			}else
				{args($a,$b,$c);
				}
*/
args($a,$b,$c);

function args($a,$b,$c)
{	
	if($a==NULL || $b==NULL || $c==NULL)
	//if(func_num_args() < 3)
		echo "Missing argumenets";
	else
		echo $c;
}

?>

