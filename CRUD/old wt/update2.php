<html>
<head>
<title>
	Update_page
</title>
 
</head>
<body>
<div id="content">
	
<center>
<h1>All the data are as below</h1>
<table  border="2" cellpadding="0.5px">
	<th>Id</th>
	<th>Name</th>
	<th>Department</th>
	<th>Designation</th>   
	<?php

	include 'db.php';
	$sid=$_POST['id'];
	$cmd="select * from info where id=$sid";
	$result=mysql_query($cmd) or die(mysql_error($con));
	$row=mysql_fetch_array($result);

			?>
	
<br><br>
	<tr><form method="POST" action="update.php">	
	<tr>
		<td> <input type="text" name="id" value="<?php echo $row['id']; ?>"/></td>
		<td> <input type="text" name="name" value="<?php echo $row['name']; ?>"/></td>
		<td> <input type="text" name="department" value="<?php echo $row['department']; ?>"/></td>
		<td> <input type="text" name="designation" value="<?php echo $row['designation']; ?>"/></td>	 
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