<?php
include 'db.php';
if(isset($_GET['update']))
{
	$a=$_GET['id'];
	$b=$_GET['name'];
	$c=$_GET['department'];
	$d=$_GET['SPI'];

$cmd="update info set id='$a',name='$b',department='$c',SPI='$d' where id='$a'";
$result = mysql_query($cmd) or die(mysql_error($con));
if($result)
{
	
	echo "<script>location.href='display.php';</script>";
}
else
{
	echo "<script>alert('Data updation unsuccessful');</script>";
}
}
?>
