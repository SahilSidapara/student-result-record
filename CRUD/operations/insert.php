<html>
<head>
<title>
	Insert_page
</title>
</head>
 <link rel="stylesheet" type="text/css" href="style.css">
<body>
<div id="header" class="header">
<center><h1>Student Result Records</h1></center>
</div>

<center>
	<h2>
	</br>
		Insert new field
	</h2>
<div id="content">
<form method="GET" action="insert1.php">
<table>
	<th>Id</th>
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
		<td><a href="updatefinal.php?id='<?php echo$a;?>'">Update</a></td>
		<td><a href="delete.php?id='<?php echo$a;?>'">Delete</a></td>
	</tr>
	<?php  }?>
	<tr>
		<td> <input type="text" name="id" /></td>
		<td> <input type="text" name="name" /></td>
		<td> <input type="text" name="department" /></td>
		<td> <input type="text" name="SPI" /></td>	
		<td colspan="2"><input type="submit" name="submit" value="submit"  id='<?php echo$a;?>'></td> 
		</tr>
	<tr>	
	
	</tr>

	</table>
		
	</form>
	</br>
</br>


		
</center>	

</div>

<div id="footer" class="footer">
	<p>Created by Sahil Sidapara</p>
</div>
</body>
</html>