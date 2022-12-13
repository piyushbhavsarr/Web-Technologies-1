<?php
$cname=$_GET['title'];
$con=pg_connect("host=192.168.1.254 dbname=ty64 user=ty64 password=ty64");
if($con)
{
	echo "Able to open database\n";
}
else
{
	echo "Unable to open database \n";
}
$sql=<<<EOF
select * from eventt,committee1;
UPDATE committee1 set status='Working' where cno=(select cno from eventt,ec where title='$cname' and eventt.eno=ec.eno);
EOF;
$ret=pg_query($con,$sql);
if(!$ret)
{
	echo pg_last_error($con);
	exit;
}
else
{
	echo "<br>Status updated successfully \n";
}
pg_close($con);
?>
