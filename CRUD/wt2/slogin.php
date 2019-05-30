<html>
<head>
<title>
Homepage
</title>
<style>
/* Style the header with a grey background and some padding */
.header {
  overflow: hidden;
  background-color: black;
  text-align:center;
 //padding: 20px 10px;
}

/* Style the header links */
.header a {
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}


.topnav {
    background-color: #333;
    overflow: hidden;
}





/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
    font-size: 17px; 
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}



/* Style the links inside the dropdown */
.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
    background-color: #555;
    color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}
}
</style>
</head>
<body>
	<div class="header">
		<a href="#default" class="logo"><center>Student Record </center></a>
	</div>

		<div id="content" style="font-family:comic sence MS">
	<center>
	</br><b>Student Login page</b></br></br>
	<table>
		<form method="GET" action="shomepage.php">
				
				<tr>
					<td>Student_Id:</td>
					<td><input type="text" name="id"></input></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="pass"></input></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="login" value="Login"/>
					<input type="reset" name="cancel" value="Cancel"/></td>
				</tr>
		</form>
	</table>
	</center>
	</div>
	<style>
	.footer {
		position: fixed;
		left: 0;
		bottom: 0;
		width: 100%;
		background-color: black;
		color: white;
		text-align: center;
	}
	</style>
	<div class="footer">
		<p>Created by:Sahil Sidapara</p>
	</div>
</body>
</html>