
<html>
<head>
<title>
	Insert_page
</title>
 
</head>
<body>
<div id="content">
	
<center>
<h1>HOMEPAGE</h1>
<form method="GET" action="insert1.php">
<table  border="2" cellpadding="0.5px">
	<th>Id</th>
	<th>Name</th>
	<th>Department</th>
	<th>Designation</th>  	
	<br><br>
	<?php
	include 'db.php';
	$cmd="select * from info";
	$result=mysql_query($cmd) or die(mysql_error($con));
	while($row=mysql_fetch_array($result))
	{
		$a=$row['id'];
		$b=$row['name'];
		$c=$row['department'];
		$d=$row['designation'];
	?>
	<tr>
		<td><?php  echo $a; ?></td>
		<td><?php  echo $b; ?></td>
		<td><?php  echo $c; ?></td>
		<td><?php  echo $d; ?></td>
		<td><a href="update2.php?id='<?php echo$a;?>'">Update</a></td>
		<td><a href="delete.php?id='<?php echo$a;?>'">Delete</a></td>
	</tr>
	<?php  }?>
	<tr>
		<td> <input type="text" name="id" /></td>
		<td> <input type="text" name="name" /></td>
		<td> <input type="text" name="department" /></td>
		<td> <input type="text" name="designation" /></td>	 
		</tr>
	<tr>	
	
	</tr>

	</table>
		<input type="submit" name="submit" value="submit"  id='<?php echo$a;?>'  >
	</form>
	</br>
</br>


			
	

</div>
<div id="footer">

</div>
</body>
</html>