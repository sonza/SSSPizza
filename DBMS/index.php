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

<?php

   $dbhost = '127.0.0.1';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'testdb';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
   if(!$conn ) {
      die('Could not connect: ' . mysql_error());
   }
$s="insert into orders values (0,0,0,NULL,0)";
if(@$_POST['add1'])
{

$s="insert into orders values (10,NULL,1,NULL,250)";

//mysql_query($s);
}
if(@$_POST['add2'])
{

$s="insert into orders values (11,NULL,1,NULL,300)";

//mysql_query($s);
}
if(@$_POST['add3'])
{

$s="insert into orders values (16,NULL,1,NULL,250)";

//mysql_query($s);
}
if(@$_POST['add4'])
{

$s="insert into orders values (12,NULL,1,NULL,175)";

//mysql_query($s);
}

if(@$_POST['add5'])
{

$s="insert into orders values (13,NULL,1,NULL,350)";

//mysql_query($s);
}
if(@$_POST['add6'])
{

$s="insert into orders values (14,NULL,1,NULL,400)";

//mysql_query($s);
}
if(@$_POST['add7'])
{

$s="insert into orders values (17,NULL,1,NULL,400)";

//mysql_query($s);
}
if(@$_POST['add8'])
{

$s="insert into orders values (15,NULL,1,NULL,350)";

//mysql_query($s);
}
if(@$_POST['add9'])
{

$s="insert into orders values (NULL,20,NULL,1,75)";

//mysql_query($s);
}
if(@$_POST['add10'])
{

$s="insert into orders values (NULL,21,NULL,1,60)";

//mysql_query($s);
}
if(@$_POST['add11'])
{

$s="insert into orders values (NULL,22,NULL,1,80)";

//mysql_query($s);
}
if(@$_POST['add12'])
{

$s="insert into orders values (NULL,23,NULL,1,150)";

//mysql_query($s);
}


   if (mysqli_query($conn, $s)){
    echo "Success!!";
   } else{
      echo "string";
   }

mysqli_close($conn);
?>


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

  <div id="main" class="container">

<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation"  class="active" ><a href="#pizza" aria-controls="pizza" role="tab" data-toggle="tab">Pizza</a></li>
    <li role="presentation"><a href="#sides" aria-controls="sides" role="tab" data-toggle="tab">Sides</a></li>
    <!-- <li role="presentation"><a href="#myo" aria-controls="myo" role="tab" data-toggle="tab">Make your own</a></li> -->
    <button id="out-btn" style="float: right"> <a href="checkout.php"> Checkout</a></button>
  </ul>
<!--  -->

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade active" id="pizza">
    	<nav class="row">
    		<section class="col-lg-3">
    			<h3>Veg Extravaganza</h3>
    			<div class="category-tile">
    				<img src="Images/vegE.png" alt="image">
    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    			</div>
			<br>
			<div>
				<input type="submit"name="add1"value="ADD">
			</div>
    		</section>

    		<section class="col-lg-3">
    			<h3>Peppy Paneer</h3>
    			<div class="category-tile">
    				<img src="Images/peppy.png" alt="image">
    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    			</div>
			<br>
			<div>
				<input type="submit"name="add2"value="ADD">
			</div>
    		</section>
    		
    		<section class="col-lg-3">
    			<h3>Spicy Triple Tango</h3>
    			<div class="category-tile">
    				<img src="Images/spicy.jpg" alt="image">
    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  			
    			</div>
			<br>
			<div>
				<input type="submit"name="add3"value="ADD">
			</div>
    		</section>

    		<section class="col-lg-3">
    			<h3>Double Cheese Margherita</h3>
    			<div class="category-tile">
    				<img src="Images/dcm.png" alt="image">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>    
				</div>
				<br>
				<div>
				<input type="submit"name="add4"value="ADD">
			</div>
    		</section>
    		<hr style="width: 90% ; border-top: 1px solid #fff;">
    		<section class="col-lg-3" style="clear: left;">
    			<h3>Chicken Mexicana</h3>
    			<div class="category-tile">
    				<img src="Images/chknmx.png" alt="image">
    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    			</div>
			<br>
			<div>
				<input type="submit"name="add5"value="ADD">
			</div>
    		</section>

    		<section class="col-lg-3">
    			<h3>Chicken Golden Delight</h3>
    			<div class="category-tile">
	    			<img src="Images/cgd.png" alt="image">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>    
				</div>
				<br>
			<div>
				<input type="submit"name="add6"value="ADD">
			</div>
    		</section>
    		
    		<section class="col-lg-3">
    			<h3>Chicken Lovers</h3>
    			<div class="category-tile">
    				<img src="Images/chknLvrs.jpg" alt="image">
    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    			</div>
			<br>
			<div>
				<input type="submit"name="add7"value="ADD">
			</div>
    		</section>

    		<section class="col-lg-3">
    			<h3>Chicken Fiesta</h3>
    			<div class="category-tile">
    				<img src="Images/fiesta.png" alt="image">
    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    			</div>
			<br>
			<div>
				<input type="submit"name="add8"value="ADD">
			</div>
    		</section>    		
    	</nav>
    </div>

    <div role="tabpanel" class="tab-pane fade" id="sides">
    	<nav id="pizza" class="row">
    		<section class="col-lg-3">
    			<h3>Cheese Jalapeno Dip</h3>
    			<div class="category-tile">
    				<img src="Images/cjd.png" alt="image">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>    
				</div>
				<br>
			<div>
				<input type="submit"name="add9"value="ADD">
			</div>
    		</section>
    		
    		<section class="col-lg-3">
    			<h3>Cheesy Dip</h3>
    			<div class="category-tile">
    				<img src="Images/cd.png" alt="image">
			 		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>   	
			 	</div>
				<br>
			<div>
				<input type="submit"name="add10"value="ADD">
			</div>
    		</section>
    		
    		<section class="col-lg-3">
    			<h3>Coke</h3>
    			<div class="category-tile">
    				<img src="Images/Coke.png" alt="image">
    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    			</div>
			<br>
			<div>
				<input type="submit"name="add11"value="ADD">
			</div>
    			
    		</section>

    		<section class="col-lg-3">
    			<h3>Stuffed Garlic Bread</h3>
    			<div class="category-tile">
    				<img src="Images/sgb.png" alt="image">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>    
				</div>
			<br>
			<div>
				<input type="submit"name="add12"value="ADD">
			</div>
    		</section>
    	</nav>
    </div>

    <!-- <div role="tabpanel" class="tab-pane" id="myo">
    	
    </div> -->	
  </div>

</div>

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