<html>
<head>
<title>
display_page
</title>
</head>
<body>
<div id="header">
	 displaypage
</div>
<div id="content">
	
<center>
<h1>

</h1>
<form action="home.php" method="POST">
<table border="1"  cellpadding="5px">
	<th>Id</th>
	<th>Name</th>
	<th>Department</th>
	<th>Designation</th>
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
		<td colspan="6">
		<input type="submit" name="submit" value="insert">
	</td>
	</tr>
</table>
</form>
</center>
</div>
	<div id="footer">
	
</div>
</body>
</html>