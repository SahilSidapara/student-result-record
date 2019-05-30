<html>
<head>
<title>
Student Result Record
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div id="header" class="header">
	<center><h1 > Student Result Records</h1></center>
</div>
<div id="content">
	
<center>
	</br>
	<h2>
	
			Display all inforamtion
	</h2>
</br>

<form action="insert.php" method="GET">
<table>
	<th >Id</th>
	<th>Name</th>
	<th>Department</th>
	<th>SPI</th>
	<th colspan="2"> </br></th> 
	<?php
	include 'db.php';
	$cmd="select * from info";
	$result=mysql_query($cmd) or die(mysql_error($con));
	while($row=mysql_fetch_array($result))
	{
		$a=$row['id'];
		$b=$row['name'];
		$c=$row['department'];
		$d=$row['SPI'];
		?>
	<tr>
		<td><?php  echo $a; ?></td>
		<td><?php  echo $b; ?></td>
		<td><?php  echo $c; ?></td>
		<td><?php  echo $d; ?></td>
		<td><a href="updatefinal.php?id=<?php echo$a;?>">Update</a></td>
		<td><a href="delete.php?id='<?php echo$a;?>'">Delete</a></td>
	</tr>

	<?php  }?>
	<tr>
		<td colspan="6">
		<center><input type="submit" name="submit" value="Insert"></center>
	</td>
	</tr>
</table>
</form>
</center>
</div>
	<div id="footer" class="footer">
		<p>Created by Sahil Sidapara</p>
	
</div>
</body>
</html>