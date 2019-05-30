<?php
include 'db.php';
if(isset($_POST['update']))
{
	$a=$_POST['id'];
	$b=$_POST['name'];
	$c=$_POST['department'];
	$d=$_POST['designation'];

$cmd="update info set id='$a',name='$b',department='$c',designation='$d' where id='$a'";
$result = mysql_query($cmd) or die(mysql_error($con));
if($result)
{
	echo "<script>alert('Data updated successfully');</script>";
	echo "<script>location.href='display2.php';</script>";
}
else
{
	echo "<script>alert('Data updation unsuccessful');</script>";
}
}
?>
<html>

</html>