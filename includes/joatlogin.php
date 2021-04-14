<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>JOAT | Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../web_app.css"> <!--own stylesheet-->
  <script type="text/javascript" src="../web_app_js.js"></script> <!--own javascript file-->
  <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico"> <!--adds a image to the title-->

<!--3 bootstrapcdn links-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="dif">

  <a href="../index.html"><img class ="logo" src="../image/logo2.jpg" alt="Logo" title="return to mainpage"></a>
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
      <a class="navbar-brand" href="../index.html">JOAT</a>
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
      <li><a href="../signup.html"><span class="glyphicon glyphicon-user" title="Make account"></span> Sign Up</a></li>
      <li class="active"><a href="../login.html"><span class="glyphicon glyphicon-log-in" title="Login"></span> Login</a></li>
    </ul>
  </div>  </div>
</nav>

<div class="container">
  <h2 id="head_login">JOAT Login</h2>
</div>

<?php

$dbServername= "localhost";
$dbUsername ="root";
$dbPassword="";
$dbName="joat_project";

$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword,
$dbName);

  $user= $_POST['uid'];
  $pass= $_POST['pwd'];
  //$hash=password_verify($pass, );
  //session_start();


  //$sql="SELECT * FROM joat_user WHERE user_uid='$user' AND user_type='JOAT Invest'";
  /*$sql_1="SELECT * FROM joat_user WHERE user_uid='$user' AND user_pwd='$hash' AND user_type='management'";
  $sql_2="SELECT * FROM joat_user WHERE user_uid='$user' AND user_pwd='$hash' AND user_type='JOAT Account'";
  $sql_3="SELECT * FROM joat_user where user_id='$user' AND user_pwd='$hash' AND user_type='moderator'";
  $sql_4="SELECT * FROM joat_user where user_id='$user' AND user_pwd='$hash' AND user_type='creator'";*/


  //$result=mysqli_query($conn,$sql);
  /*$res=mysqli_query($conn,$sql_1);
  $result_2=mysqli_query($conn,$sql_2);
  $result_3=mysqli_query($conn,$sql_3);
  $result_4=mysqli_query($conn,$sql_4);*/

  /*$count=mysqli_num_rows($result);
  $count_2=mysqli_num_rows($res);
  $count_3=mysqli_num_rows($result_2);
  $count_4=mysqli_num_rows($result_3);
  $count_5=mysqli_num_rows($result_4);*/

/*
if(mysqli_num_rows($result)>0){
  while ($row=mysqli_fetch_assoc($result)){
    if(password_verify($pass,$row['user_id'])){
      $user=$row['user_id'];
      	header("location:trader/home.html");
    }
    else{
      echo"Either username or password do not match please try again";
    	echo"<a href='../login.html'><button type='button' class='btn btn-primary btn-lg' >return to Login</button></a>";
    }
  }
}*/
  /*if($count>0){

		header("location:trader/home.html");
  }elseif($count_2 >0){

	  header ('location:management/home.html');

  }elseif($count_3==1){
  //elseif(mysqli_num_rows($result_2)>0){
	  header("location:customer/index.html");
  }elseif($count_4==1){
    header('location:moderator/home.html');
}elseif ($count_5==1) {
  header('location:content_creator/home.html');

}else{
	  //header("location:mistake.php");
	echo"Either username or password do not match please try again";
	echo"<a href='../login.html'><button type='button' class='btn btn-primary btn-lg' >return to Login</button></a>";

}*/
  //}
  //mysqli_close();

    //$sql ="SELECT * FROM joat_user WHERE user_uid= ?";
    $sql= $conn->prepare('SELECT user_id,user_uid,user_pwd,user_type FROM joat_user WHERE user_uid= ?');
    $sql->bind_param('s',$user);
    /*$result= $pdo->prepare($sql);
    $result->bindparam('s',$user);
    $result->execute();*/
    $sql->execute();
    //$userrow =$result->fetch();
    $sql->store_result();
    $sql->bind_result($useri,$usern,$hshpwd,$u_type);
    if ($sql->num_rows==1) {
      $sql->fetch();
//['user_pwd'] ['user_type']
    if (password_verify($pass,$hshpwd) && $u_type =='JOAT Invest') {
      	header("location:../trader/home.php");
        $_SESSION['uid']=$usern;
        $_SESSION['userid']=$useri;
    }elseif (password_verify($pass,$hshpwd) && $u_type=='JOAT Account') {
      header("location:../customer/index.php");
	  $_SESSION['uid']=$usern;
        $_SESSION['userid']=$useri;
    }elseif (password_verify($pass,$hshpwd) && $u_type=='Moderator') {
        header('location:../moderator/home.php');
		$_SESSION['uid']=$usern;
        $_SESSION['userid']=$useri;
    }elseif (password_verify($pass,$hshpwd) && $u_type=='management'){
      header ('location:../management/home.php');
	  $_SESSION['uid']=$usern;
        $_SESSION['userid']=$useri;
    }elseif (password_verify($pass,$hshpwd) && $u_type=='content creator') {
      header('location:../content_creator/home.php');
	  $_SESSION['uid']=$usern;
        $_SESSION['userid']=$useri;
    }else {
      echo"Either username or password do not match please try again";
      echo"<a href='../login.html'><button type='button' class='btn btn-primary btn-lg' >return to Login</button></a>";
      $_SESSION=[];
      session_destroy();
    }
  }else {
    echo"Either username or password do not match please try again";
    echo"<a href='../login.html'><button type='button' class='btn btn-primary btn-lg' >return to Login</button></a>";
  
    $_SESSION=[];
    session_destroy();
  }
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

function changeBGC(color){
if (color=='#000000'){
		document.body.style.backgroundColor = color;
    document.getElementById('head_login').style.color="white";
    document.getElementById('lbl_pwd').style.color="white";
    document.getElementById('lbl_email').style.color="white";


	}else{
    //change element colour back
		document.body.style.backgroundColor = color;
    document.getElementById('head_login').style.color="black";
    document.getElementById('lbl_pwd').style.color="black";
    document.getElementById('lbl_email').style.color="black";


  }}
</script>
</body>
</html>
