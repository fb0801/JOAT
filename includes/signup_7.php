<!DOCTYPE html>
<html lang="en">
<head>
  <title>JOAT | signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../web_app.css"> <!--own stylesheet-->
  <script type="text/javascript" src="../web_app_js.js"></script> <!--own javascript file-->
  <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico"> <!--adds a image to the title-->

<!--3 bootstrapcdn links-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
.edit_link{
  /*remove underline from site link*/
	text-decoration:none;
	color:#ffffff;
}
</style>
</head>

<body>

  <diV class="dif">

  <a href="index.html"><img class ="logo" src="../image/logo2.jpg" alt="Logo" title="return to mainpage"></a>
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
        <li><a href="../index.html">Home</a></li>
        <li><a href="../invest.html">Investment</a></li>
      <li><a href="../card.html">Card Companies</a></li>
      <li><a href="../news.html">News</a></li>
      <li><a href="../article.html">Articles</a></li>
      <li><a href="../apply.html">Apply</a></li>
      <li><a href="../about_us.html">About us</a></li>
      <li><a href="../contact.html">Contact us</a></li>
      <li><a href="../feedback.html">Feedback</a></li>
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
      <li class="active"><a href="../signup.html"><span class="glyphicon glyphicon-user" title="Make account"></span> Sign Up</a></li>
      <li><a href="../login.html"><span class="glyphicon glyphicon-log-in" title="Login"></span> Login</a></li>
    </ul>
  </div>  </div>
</nav>



<?php
/*
$usename = 'root';
$passwod = '';
$servename = 'localhost';
$dbname = 'joat';
6
*/
$dbServername= "localhost";
$dbUsername ="root";
$dbPassword="";
$dbName = 'joat_project';

$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
  if(isset($_POST['submit'])){
   $firstname = $_POST['name'];
   $Uname = $_REQUEST['username'];
   $email = $_REQUEST['email'];
   $password = $_REQUEST['pwd'];
   $app_type=$_REQUEST['acc_type'];


  $sql="SELECT * FROM joat_user WHERE user_uid='$Uname'";
  $q_3="SELECT * FROM joat_user WHERE user_email='$email'";
  $result=mysqli_query($conn,$sql);
  $res=mysqli_query($conn,$q_3);
  if(mysqli_num_rows($result)>0){

		print "<p>Username ".$_POST['username'].", already exists!</p>";
  }elseif(mysqli_num_rows($res)>0){
	  //echo'You already have a account';
	  print "<p>You already have a account ".$_POST['email']."</p>";

  }else{
	$hash=password_hash($password, PASSWORD_DEFAULT);
	$check=htmlspecialchars($Uname);
	$check_2=htmlspecialchars($email);
	$sql_2="INSERT into joat_user(user_first, user_uid, user_email, user_pwd, user_type)
	values('$firstname','$check','$check_2','$hash','$app_type')";
	mysqli_query($conn,$sql_2);
 /* print "<div class='container'><p>Thank you ".$_POST['name'].", you can now use the app just click on the login button or on the link below</p>
      <button type='submit' class='btn btn-default'><a class='edit_link' href='../login.html'>Login</a></button>

  </div>";*/
   print "<div class='container'><p>Thank you ".$_POST['name'].", you can now use the app just click on the login button or on the link below</p>
      <a class='edit_link' href='../login.html'><button type='submit' class='btn btn-default'>Login</button></a>
  </div>";
  }
  }
mysqli_close($conn);
  

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