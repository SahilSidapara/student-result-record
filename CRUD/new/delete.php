<?php
include "db.php";
$id=$_GET['id'];
$cmd="delete from info where id=$id";
$result=mysql_query($cmd) or die(mysql_error($con));
if($result)
{
	echo "<script> alert('delete success');</script>";
	echo "<script>location.href='display2.php';</script>";
}else
{
	echo "<script> alert(' error delete');</script>";
}
?>