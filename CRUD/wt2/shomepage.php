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

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}






/* Style the dropdown content (hidden by default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
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







</style>
</head>
<body>
<div class="header">
	<a href="#default" class="logo"><center>Student Alumni Detail</center></a>
</div>

<div class="topnav" id="myTopnav">
  
  
  <a href="view.php">View</a>
  <a href="update.php">Update</a>
  <a href="delete.php">Delete</a>
  <a href="viewevent.php">Event</a>
  
  <a href="\alumni/homepage.php" style="float:right;">Log_Out</a>  
  
</div>
<div id="content">
<center><b><h1>Student Home Page</h1></b></center>
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
  <p></p>
</div>
</body>
</html>