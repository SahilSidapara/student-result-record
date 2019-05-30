<?php
	
			include 'db.php';

			if(isset($_POST['submit']));
			{
			$a=$_POST['id'];
			$b=$_POST['name'];
			$c=$_POST['department'];
			$d=$_POST['designation'];
	$que="insert into info(id,name,department,designation) values('$a','$b','$c','$d')";
	$result=mysql_query($que) or die(mysql_error($con));
	
	if($result){
		echo "<script> alert('data inserted successfully');	</script>";
		echo "<script>location.href='update2.php';</script>";
	}
	else{
		echo "<script> alert('error in data insertation') </script>";
	}
}
			?>