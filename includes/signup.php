<!DOCTYPE html>
<html lang="en">
<head>
  <title>JOAT | signup</title>
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

  <diV class="dif">

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
      <li><a href="card.html">Card Companies</a></li>
      <li><a href="news.html">News</a></li>
      <li><a href="article.html">Articles</a></li>
      <li><a href="apply.html">Apply</a></li>
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
      <li class="active"><a href="signup.html"><span class="glyphicon glyphicon-user" title="Make account"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in" title="Login"></span> Login</a></li>
    </ul>
  </div>  </div>
</nav>



<?php

$username = 'Farhan';
$password = 'Farhan3712356';
$servername = 'localhost';
$dbname = 'joat';
/*
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $firstname = $_POST['name'];
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['pwd'];

    // prepare sql and bind parameters
//    $stmt = $conn->prepare("SELECT * FROM joat_user");
    $result= $pdo->query("SELECT * FROM joat_user", PDO::FETCH_ASSOC);


  //  $stmt->execute();
    //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

foreach($result as $row){
	if ($result['user_email']>1){
		print 'Account already exists';
	}elseif($result['user_uid']>1){
		print "Username already taken";
	}else{
    $stmt = $conn->prepare("INSERT INTO joat_user (app_first, user_uid, user_email, user_pwd, user_type)
    VALUES (:firstname, :username, :email, :user_pwd, :app_type)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
      $stmt->bindParam(':firstname', $firstname);
      $stmt->bindParam(':app_type', $app_type);
      $stmt->bindParam(':email', $email);
  $stmt->execute();

  //echo "New record created successfully";
	print "<p>Thank you ".$_POST['name'].", you can now use the app just click on the login button or on the link below</p>";

    }
catch(PDOException $e)
    {
    //echo $sql . "<br>" . $e->getMessage();
    echo "Error: " . $e->getMessage();
    }
//}


$conn = null;

*/
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $firstname = $_POST['name'];
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['pwd'];
    $app_type=$_REQUEST['acc_type'];

//$data=$firstname,$email;
$result= $pdo->query("SELECT * FROM joat_user", PDO::FETCH_ASSOC);
foreach($result as $row){
	if ($result['user_email']>1){
		print 'Account already exists';
	}elseif($result['user_uid']>1){
		print "Username already taken";
	}else{

	 $sql= "INSERT into joat_user(app_first, user_uid, user_email, user_pwd, user_type)
	values('$firstname','$username','$email','$password', '$app_type')";
	 // use exec() because no results are returned
	$conn->exec($sql);
	//echo "New record created successfully";
  print "<p>Thank you ".$_POST['name'].", you can now use the app just click on the login button or on the link below</p>";

	/*index.html*/
}
}}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

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
