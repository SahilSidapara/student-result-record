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
	<a href="#default" class="logo"><center>Student Records</center></a>
</div>

<div class="topnav" id="myTopnav">
  
  
  <div class="dropdown">
    <button class="dropbtn">Login
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="student/slogin.php">Student_Login</a>
      <a href="admin/ilogin.php">Institute_Login</a>
    </div>
  </div>
  
  </div>  
  
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
  <p>created by Sahil Sidapara</p>
</div>
</body>
</html>