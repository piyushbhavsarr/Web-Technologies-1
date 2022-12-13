<html>
<head>
<title> High Temperature Array </title>
</head>
<body bgcolor="lightblue">
<h2> High Temperature for Spring Month </h2>

<?php
$ht=array(68,70,72,58,60,79,82,73,75,77,73,58,63,79,78,68,72,73,80,79,68,72,75,77,73,78,82,85,89,83);
$count=count($ht);
$total=0;
foreach($ht as $h)
{
	$total+=$h;
}
$avg=round($total/$count);
echo"<p> The avearge high temperature for the month was $avg &deg F.</p> \n";
rsort($ht);
$tp=array_slice($ht,0,5);
echo"The warmest 5 high temperature were : <br> \n";
foreach($tp as $t)
{
	echo "$t &deg F.<br> \n";
}
echo" </p>";
$lt=array_slice($ht,-5,5);
echo"The coolest 5 temperature were : <br>\n";
foreach($lt as $l)
{
	echo "$l &deg F.<br> \n";
}
echo "<br>";
?>
</body>
</html>


