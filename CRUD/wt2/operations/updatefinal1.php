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
<h1>Student Result Record</h1>
</center>
</div>
<div id="content">
	<center></br>
		<h2>Update information</h2>
<form method="GET" action="update.php">
<table>
	<th>Id</th>
	<th>Name</th>
	<th>Department</th>
	<th>SPI</th>   
	<th colspan="2"> </br></th>  
	<?php

	include 'db.php';
	$sid=$_GET['id'];
	$cmd="select * from info where id=$sid";
	$result=mysql_query($cmd) or die(mysql_error($con));
	$row=mysql_fetch_array($result);

			?>
		
	<tr>
		<td> <input type="text" name="id" value="<?php echo $row['id']; ?>" required></td>
		<td> <input type="text" name="name" value="<?php echo $row['name']; ?>" required></td>
		<td> <input type="text" name="department" value="<?php echo $row['department']; ?>" required></td>
		<td> <input type="text" name="SPI" value="<?php echo $row['SPI']; ?>" required></td>	
		<td><input type="submit" name="update" value="update"></td> 
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