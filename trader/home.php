<?php
include '../includes/joat_session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>JOAT | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="../web_app.css"> <!--own stylesheet-->
  <script type="text/javascript" src="../web_app_js.js"></script> <!--own javascript file-->
  <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico"> <!--adds a image to the title-->


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

<body>
  <div class="dif">

    <a href="home.php"><img class ="logo" src="../image/logo2.jpg" alt="Logo" title="return to mainpage"></a>
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
      <a class="navbar-brand" href="home.php">JOAT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="invest.php">Investment</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
      <li><a href="news.php">News</a></li>
      <li><a href="article.php">Articles</a></li>
      <li><a href="forum.php">Forum</a></li>

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
      <li><a href="#" onclick="changeBGC('#000000')" ondblclick="changeBGC('#ffffff')"><span  class="glyphicon glyphicon-adjust" title="change background and text colour"></span></a></li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""><span class="glyphicon glyphicon-user" title="Make account"></span> Account <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="#">manage account</a></li>
           <li><a href="../logout.php">log out</a></li>
         </ul>
       </li>

   </ul>
  </div>  </div>
</nav>

<div class="container">
  <h2 id="Joat_head_2">JOAT Invest</h2>
  <?php


  //print "Welcome " . $_SESSION['userid'].;
  //echo "welcome " . $_SESSION['userid'] . ".<br>";
  //echo  $_SESSION['userid'] ;
  //echo $_SESSION['userid']=$useri;
  echo "welcome " . $_SESSION['uid'] . "<br>";

  ?>



</div>





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
