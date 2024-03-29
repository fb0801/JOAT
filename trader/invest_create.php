<?php
include '../includes/joat_session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>JOAT | Invest</title>
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
      <li><a href="home.php">Home</a></li>
      <li class="active"><a href="invest.php">Investment</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
    <li ><a href="news.php">News</a></li>
    <li ><a href="article.php">Articles</a></li>
  <li><a href="forum.php">Forum</a></li>
  </ul>


     <form class="navbar-form navbar-right" action="">
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
          <li><a href="report_issue.php">report issue</a></li>
          <li><a href="../logout.php">log out</a></li>
        </ul>
      </li>

  </ul>
</div>  </div>
</nav>


<div class="container text-left">
<h2 id="Joat_head">JOAT invest</h2>

<form action="create_portfolio.php" method="POST">
  <div class="form-group">
  <label id='lbl' for="name">Account type:</label>    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"data-toggle="tooltip" title="Select your account type" ></i></span>
    <select class="form-control" id="sel1" name='account_type'>
      <option value='Stock and shares ISA'>Stock and shares ISA</option>
      <option value ='General Investment ISA'>General Investment ISA</option>

    </select>
  </div></div>

  <div class="form-group">
    <label id='lbl' for="name">Portfolio Name:</label>
    <div class="input-group">
    <span class="input-group-addon">Portfolio Name:</span>
    <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name" size="10">
  </div></div>

  <div class="form-group">
    <label id='lbl' for="name">NIN:</label>
    <div class="input-group">
    <span class="input-group-addon">NIN:</span>
    <input type="text" class="form-control" id="name" placeholder="Enter your NIN" name="nin" size="10">
  </div></div>

  <div class="form-group">
    <label id='lbl_5' for="sel1">status (select one):</label>
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"data-toggle="tooltip" title="Select your status" ></i></span>
    <select class="form-control" id="sel1" name='status_type'>
      <option value='Student'>Student</option>
      <option value ='Employed'>Employed</option>
      <option value ='Asylum seeker'>Asylum seeker</option>
      <option value ='un-employed'>un-employed</option>
      <option value ='Other'>other</option>

    </select>



  </div></div>




<br>

  <button type="submit" class="btn btn-default">Submit</button>
</form><br>




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

function changeBGC(color){
if (color=='#000000'){
  document.body.style.backgroundColor = color;
  document.getElementById('lbl_6').style.color="white";
  document.getElementById('lbl_3_email').style.color="white";
  document.getElementById('lbl_5_contact').style.color="white";
  document.getElementById('Joat_head').style.color='white';



}else{
  //change element colour back
  document.body.style.backgroundColor = color;
  document.getElementById('lbl_6').style.color="black";
  document.getElementById('lbl_3_email').style.color="black";
  document.getElementById('lbl_5_contact').style.color="black";
  document.getElementById('Joat_head').style.color='black';


}}
</script>
</body>
</html>
