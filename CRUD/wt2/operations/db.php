<?php
$con=mysql_connect("localhost","root","");
if(!$con)
	echo "connecton failed";
$cone=mysql_select_db("reg");
if(!$cone)
	echo "selection failed";

?>