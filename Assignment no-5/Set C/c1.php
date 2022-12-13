<?php
$file=$_GET['fname'];
$ch=$_GET['op'];
switch($ch)
{
	case 1 : $t=filetype($file);
		 echo "File type : $t";
		 break;
		 
	case 2 : $a=fileatime($file);
	         echo " Last accesss time of file : $a";
		 break;
		 
	case 3 : $s=filesize($file);
	         echo "Size of file : $s";
		 break;
		 
	case 4 : $d=unlink($file);
		 echo "Deleted file successfully";
		 break;	
}
?>
