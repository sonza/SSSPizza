<?php
//Step1
 $db = mysqli_connect('localhost','root','','testdb')
 or die('Error connecting to MySQL server.');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="vi<?php
//Step1
 $db = mysqli_connect('localhost','root','','testdb')
 or die('Error connecting to MySQL server.');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DBMS Mini Project</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<header>
	<nav id= "header-nav" class="navbar navbar-default">
 	<div class="container">
   		<div class="navbar-header">
      	<a class="" href="home.html">
        	<div id="logo-img" alt="Logo" class="visible-md visible-lg visible-sm"  ></div>
      	</a>
    </div>
    <div id = "brand" class="navbar-brand">
    	<a href="home.html"><h1>SSS Pizza</h1></a>
    </div>
    <div>
    	<ul id="nav-list" class="">
    		<li><a href="home.html">Home</a></li>
    		<li ><a href="index.php">Menu</a></li>
    		<button id="log-btn" style="margin-left: 20%"><a href="loginn.html" style="float: left;">log in/sign up</a></button>
       	</ul>
    	
    	<!-- log in/sign up link -->
    </div>
    
  	</div>
	</nav>
</header>

<!-- MAIN CONTENT -->

<h4>Summary of Today's Orders</h4> <br />

<?php
//Step2
$query = "SELECT pizza.pname,sides.sname,orders.total from pizza,sides,orders where pizza.pno=orders.pno AND sides.sno=orders.sno";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['pname'] . ' ' . $row['sname'] . ': ' . $row['total'] . ' <br />';
}
?>

<!-- END OF MAIN CONTENT -->

<footer id="footerr" class="panel-footer">
	<div class="container">
		<div class="row">
			<div class="size">
				<p> DBMS Mini Project By:<br>
					Sonza Singh (1MS14IS106)<br>
					Saniya Farahat (1MS14IS095)<br>
					Sanskar Biad (1MS14IS096)
				</p>
			</div>
			<div class="size">
				<p>
					Contact us:<br>
					email: xyz@abc.com><br>
					Ph no.: 00-000 000
				</p>
			</div>
		</div>
		
	</div>
	
</footer>


<!-- jQuery (Bootstrap JS plugins depend on it) -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>