<?php
	
			include 'db.php';

			if(isset($_GET['submit']));
			{
			$a=$_GET['id'];
			$b=$_GET['name'];
			$c=$_GET['department'];
			$d=$_GET['designation'];
	$que="insert into info(id,name,department,designation) values('$a','$b','$c','$d')";
	$result=mysql_query($que) or die(mysql_error($con));
	
	if($result){
		echo "<script> alert('data inserted successfully');	</script>";
		echo "<script>location.href='display2.php';</script>";
	}
	else{
		echo "<script> alert('error in data insertation') </script>";
	}
}
			?>