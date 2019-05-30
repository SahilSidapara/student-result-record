<html>
<head>
<title>
	updatefinal_page
</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div  class="header">
<center>
<h1>Student Result Records</h1>
</center>
</div>
<div id="content">
	<center></br>
		<h2>Update information</h2>
	</br>
<form method="GET" action="update.php">
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
	$sid=$_GET['id'];

	while($row=mysql_fetch_array($result) )
	{
		$else=$row[0];
		
		if($sid==$row[0]){
		$cmd1="select * from info where id=$sid";
		$result1=mysql_query($cmd1) or die(mysql_error($con));
		$row=mysql_fetch_array($result1);

		?>
	<tr>
		<td> <input type="text" name="id" value="<?php echo $row['id']; ?>"/></td>
		<td> <input type="text" name="name" value="<?php echo $row['name']; ?>"/></td>
		<td> <input type="text" name="department" value="<?php echo $row['department']; ?>"/></td>
		<td> <input type="text" name="SPI" value="<?php echo $row['SPI']; ?>"/></td>	
		<td><input type="submit" name="update" value="Submit"></td> 
		<td><a href="delete.php?id='<?php echo$a;?>'">Delete</a></td>
		</tr>
	
		<?php
		
		}else {
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
		
	<?php
		}
	}
	?>
	</form>
	<form method="GET" action="insert.php">
	<tr>
		<td colspan="6">
		<center><input type="submit" name="submit" value="Insert"></center>
	</td>
	</tr>
	</table> 
	</form>

	</br>
</br>
</div>
<div class="footer">
	<p>Created by Sahil Sidapara</p>

</div>
</body>
</html>