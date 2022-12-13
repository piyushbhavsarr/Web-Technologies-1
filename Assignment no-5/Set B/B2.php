<?php
$cname=$_GET['cpn'];
$con=pg_connect("host=192.168.1.254 dbname=ty64 user=ty64 password=ty64");
if(!$con)
{
	echo "Error : Unable to open database\n";
}
else
{
	echo "Opened database succesfully\n";
}
$sql=<<<EOF
select * from sc,competition,student where student.stud_id=sc.stud_id and competition.c_no=sc.c_no and rank=1 and c_name='$cname';
EOF;
$ret=pg_query($con,$sql);
while($row=pg_fetch_row($ret))
{
	echo "<br>Stud_id : ".$row[0]."\n";
	echo "<br>C_no : ".$row[1]."\n";
	echo "<br>Rank : ".$row[2]."\n";
	echo "<br>Year : ".$row[3]."\n";
}
echo "<br>NO Record has rank 1";
pg_close($con);
?>

