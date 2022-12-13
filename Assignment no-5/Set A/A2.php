<?php
//$cname=$_GET['title'];
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

CREATE TABLE EVENT(ENO INT PRIMARY KEY,TITLE TEXT,DATE VARCHAR(10));
CREATE TABLE COMMITTEE(CNO INT PRIMARY KEY,NAME TEXT,HEAD TEXT,FROM_TIME VARCHAR(10),TO_TIME VARCHAR(10),STATUS TEXT);
CREATE TABLE EC(ENO INT REFERENCES EVENT(ENO),CNO INT REFERENCES COMMITTEE(CNO));

INSERT INTO EVENT(ENO,TITLE,DATE)
VALUES(1,'Genesis',2/12/2022);

INSERT INTO EVENT(ENO,TITLE,DATE)
VALUES(2,'AnnualDay',4/12/2022);

INSERT INTO EVENT(ENO,TITLE,DATE)
VALUES(3,'SportsDay',6/12/2022);

INSERT INTO COMMITTEE(CNO,NAME,HEAD,FROM_TIME,TO_TIME,STATUS)
VALUES(11,'TCS','SHUKLA',9,8,'NON-WORKING');

INSERT INTO COMMITTEE(CNO,NAME,HEAD,FROM_TIME,TO_TIME,STATUS)
VALUES(12,'INFOSYS','MEHTA',10,7,'WORKING');

INSERT INTO COMMITTEE(CNO,NAME,HEAD,FROM_TIME,TO_TIME,STATUS)
VALUES(13,'CAPGEMINI','PATIL',7,5,'WORKING');

INSERT INTO EC (ENO,CNO)
VALUES(1,11);

INSERT INTO EC(ENO,CNO)
VALUES(2,12);

INSERT INTO EC(ENO,CNO)
VALUES(3,13);


EOF; 
$ret=pg_query($con,$sql);
if(!$ret)
{
	echo pg_last_error($con);
}
else
{
	echo "<br>Record Created Successfully !!";
}
UPDATE COMMITTEE set STATUS='Working';
$ret=pg_query($con,$sql);
if(!$ret)
{
	echo pg_last_error($con);
	exit;
}
else
{
	echo "Status updated successfully \n";
}
pg_close($con);
?>
