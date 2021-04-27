<?php
  require_once( 'includes/dbutils.php');

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
        <li ><a href="index.html">Home</a></li>
        <li><a href="invest.php">Investment</a></li>
      <li><a href="card.php">Card Companies</a></li>
      <li><a href="news.php">News</a></li>
      <li><a href="article.php">Articles</a></li>
      <li class="active"><a href="apply.php">Apply</a></li>
      <li><a href="about_us.html">About us</a></li>
      <li><a href="contact.html">Contact us</a></li>
      <li><a href="feedback.html">Feedback</a></li>
    </ul>


    <form class="navbar-form navbar-right" action="includes/joat_search.php" method="POST">
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



<div class="container">
  <h2 id="Joat_head">JOAT Apply</h2>
  <form action="joat_app_2.php" method="POST">
    <div class="form-group">
      <label id='lbl' for="name">Name:</label>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
    </div></div>

    <div class="form-group">
      <label id='lbl_3' for="email">Email:</label>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div></div>


    <div class="form-group">
      <label id='lbl_5' for="sel1">Position (select one):</label>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"data-toggle="tooltip" title="Select the position you would like to apply for" ></i></span>
      <select class="form-control" id="sel1" name='acc_type'>
        <option value='content creator'>Content creator</option>
        <option value ='admin'>Admin</option>
        <option value='Moderator'>Moderator</option>
        <option  value='Broker'>Broker</option>

      </select>
      <br>


    </div></div>


    <button type="submit" class="btn btn-default">Submit</button>
  </form><br>

  <div class="container-fluid  text-left">
    <p>Apply for any of the roles that we are currently offering above along with your name and email</p>
  </div>

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
