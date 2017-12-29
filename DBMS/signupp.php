

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DBMS Mini Project</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
    #container{
      /*width:400px;*/
      margin:0 auto;
    }
    /* Nicely lines up the labels. */
    form label{
      display:inline-block;
      width:160px;
      text-align: left;
    }
    /* You could add a class to all the input boxes instead, if you like. That would be safer, and more backwards-compatible */
    form input[type="text"], form input[type="password"], form input[type="email"] {
      width:200px;
    }
    form .line {
      clear:both;
    }
    @media (max-width: 425px){
      #container{
        width: 90%;
      }
    }
  </style>
</head>

<body>
<?php 
 $name = $email = $username = $pwd = $city = $add = $tel = $ptc = "";
 $nameErr = $emailErr = $usernameErr = $pwdErr = $cityErr = $addErr = $telErr = $ptcErr = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["name"])) {
       $nameErr = "Name is required";
   } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed"; 
        }
   }

   if (empty($_POST["email"])) {
        $emailErr = "Email is required";
   } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format"; 
        }
   }

   if (empty($_POST["username"])) {
       $usernameErr = "Username is required";
   } else {
        $username = test_input($_POST["username"]);
   }

   if (empty($_POST["pwd"])) {
       $pwdErr = "Password is required";
   } else {
        $pwd = test_input($_POST["pwd"]);
   }

   if (empty($_POST["city"])) {
       $cityErr = "City is required";
   } else {
        $city = test_input($_POST["city"]);
   }

   if (empty($_POST["add"])) {
       $addErr = "Address is required";
   } else {
        $add = test_input($_POST["add"]);
   }

   if (empty($_POST["tel"])) {
       $telErr = "Telephone is required";
   } else {
        $tel = test_input($_POST["tel"]);
   }

   if (empty($_POST["ptc"])) {
       $ptcErr = "Pin Code is required";
   } else {
        $ptc = test_input($_POST["ptc"]);
   }
 }

   $dbhost = '127.0.0.1';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'testdb';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
   if(!$conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "INSERT INTO userinfo VALUES (NULL, '$name', '$email', '$username', '$pwd', '$city', '$add', '$tel', '$ptc')";
      
   if (mysqli_query($conn, $sql)){
    echo "Success!!";
   } else{
      echo "string";
   }
   mysqli_close($conn);

 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
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
<div id="container">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <center>
      <h1>Sign Up</h1>
  </center>
      <br>
      <div class="line">
        <label for="name">Name : </label>
        <input type="text" name="name" value="<?php echo $name; ?>" />
        <span class="error">* <?php echo $nameErr; ?></span>
      </div>
      <br> 
      <div class="line">
        <label for="email">Email : </label>
        <input type="email" name="email" value="<?php echo $email; ?>" />
        <span class="error">* <?php echo $emailErr; ?></span>
      </div>
      <br> 
      <div class="line">
        <label for="username">Username : </label> 
        <input type="text" name="username" value="<?php echo $username; ?>"/>
        <span class="error">* <?php echo $usernameErr; ?></span>
      </div>
      <br>           
      <div class="line">
        <label for="pwd">Password : </label>
        <input type="password" name="pwd" />
        <span class="error">* <?php echo $pwdErr; ?></span>
      </div>
      <br> 
      <div class="line">
        <label for="cpwd">Confirm password : </label>
        <input type="password" name="cpwd" />
        <!-- <span class="error">* <?php echo $cpwdErr; ?></span> -->
      </div>
      <br> 
      <div class="line">
        <label for="city">City: </label>
        <input type="text" name="city" value="<?php echo $city; ?>"/>
        <span class="error">* <?php echo $cityErr; ?></span>
      </div>
      <br> 
      <div class="line">
        <label cols="3" for="add">Address : </label>
        <input type="text" name="add" value="<?php echo $add; ?>"/>
        <span class="error">* <?php echo $addErr; ?></span>
      </div>
      <br> 
      <div class="line">
        <label for="tel">Telephone: </label>
        <input type="text" name="tel" value="<?php echo $tel; ?>" />
        <span class="error">* <?php echo $telErr; ?></span>
      </div>
      <br> 
      <div class="line">
        <label for="ptc">Pin Code : </label>
        <input type="text" name="ptc" value="<?php echo $ptc; ?>" />
        <span class="error">* <?php echo $ptcErr; ?></span>
      </div>
      <br>
  <center>
      <div class="line submit">
        <input type="submit" value="Submit"/>
      </div>
  </center>
      <br>
  </form>
</div>

<footer id="footerr" class="panel-footer">
	<div class="container">
		<div class="row">
			<div class="size">
				<p> DBMS Mini Project By:<br>
					Sonza Singh (1MS14IS106)<br>
					Saniya Farahath (1MS14IS095)<br>
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