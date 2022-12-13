<?php
$fp=fopen("myFile.dat","r");
$s=stat("myFile.dat");
echo "The Size of myFile.dat is $s[7] bytes";
$r=fread($fp,$s[7]);
echo "<br>File content : ";

echo "<br>$r";

fclose($fp);

?>
