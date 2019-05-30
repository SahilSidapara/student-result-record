<html>
<head>
<title>
	Update_page
</title> 
</head>
<body>
<div id="header">
	Update page
	</div>
<div id="content">
	
<center>
<h1>All the data are as below</h1>
<table  border="2" cellpadding="0.5px">
	<th>Id</th>
	<th>Name</th>
	<th>Department</th>
	<th>Designation</th>   
	<?php
	echo"sch";
	include 'db.php';
	$cmd="select * from info";
	$result=mysql_query($cmd) or die(mysql_error($con));
	$row=mysql_fetch_array($result);

			?>
	
<br><br>
	<tr><form method="POST" action="update2.php">	
	<tr>
		<td> <?php echo $row['id']; ?></td>
		<td> <?php echo $row['name']; ?></td>
		<td> <?php echo $row['department']; ?></td>
		<td> <?php echo $row['designation']; ?></td>
		 
		</tr>
	</tr>
	</table>
	<input type="submit" name="update" value="update">
	</form>

	</br>
</br>
</div>
<div id="footer">

</div>
</body>
</html>