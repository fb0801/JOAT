<?php
require_once "includes/dbutils.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>JOAT | Apply</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="web_app.css"> <!--own stylesheet-->
  <script type="text/javascript" src="web_app_js.js"></script> <!--own javascript file-->
  <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico"> <!--adds a image to the title-->

<!--3 bootstrapcdn links-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="dif">

  <a href="index.html"><img class ="logo" src="image/logo2.jpg" alt="Logo" title="return to mainpage"></a>
<br><br><br><br>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">JOAT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="invest.html">Investment</a></li>
      <li><a href="#">Card Companies</a></li>
      <li><a href="news.html">News</a></li>
      <li><a href="article.html">Articles</a></li>
      <li class="active"><a href="apply.html">Apply</a></li>
      <li><a href="about_us.html">About us</a></li>
      <li><a href="contact.html">Contact us</a></li>
      <li><a href="feedback.html">Feedback</a></li>
    </ul>


       <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
     <ul class="nav navbar-nav navbar-right">
       <li><a href="#" onclick="changesize()" ondblclick="changeback()"><span class="glyphicon glyphicon-text-size"  title="change text size"></span></a></li>
       <li><a href="#" onclick="changeBGC('#000000')" ondblclick="changeBGC('#ffffff')"><span  class="glyphicon glyphicon-adjust"  title="change background and text colour"></span></a></li>
      <li ><a href="signup.html"><span class="glyphicon glyphicon-user" title="Make account"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in" title="Login"></span> Login</a></li>
    </ul>
  </div>  </div>
</nav>
<?php

$username = 'Farhan';
$password = 'Farhan3712356';
$servername = 'localhost';
$dbname = 'joat_project';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $firstname = $_POST['name'];
    $email = $_REQUEST['email'];
    $app_type = $_REQUEST['acc_type'];
	//$sql_3=$conn->query("SELECT * FROM applications WHERE user_email='$email'");
	//$sql_3="SELECT * FROM applications WHERE email='$email'";
	//$conn->execute($sql_3);
	//$ret_res=$conn->fetch();
	//$ret_res=$conn->query($sql_3);
	//if ($ret_res->num_rows > 0){
		//print"you have already applied";
	//}else{
	$sql = "INSERT INTO joat_app (app_first, user_email, app_type)
      VALUES('$firstname', '$email', '$app_type')";
	 // use exec() because no results are returned
	$conn->exec($sql);
	//echo "New record created successfully";
	print "<p>Thank you ".$_POST['name'].", your JOAT application will be reviewed in the mean time checkout the JOAT articles</p>";

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
//}
$conn = null;
?>

<div class="bottom_sec">
  <footer>
<p>&copy; This is a demonstration website for LSBU (London Southbank University) all images and text are from, Yahoo finance, Google finance, Blackrock, Ishares, Vanguard and my own blog</p>
</footer>
</div>

<button onclick="topfunc()" id="mybtn" title="Go to top"><span class="glyphicon glyphicon-chevron-up"></span></button>

<script>
//Get the button
var mybutton = document.getElementById("mybtn");

</script>
</body>
</html>
