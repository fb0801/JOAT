<?php
  require_once( 'includes/dbutils.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>JOAT | News</title>
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
<body id="body">

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
    <li class="active"><a href="news.php">News</a></li>
    <li><a href="article.php">Articles</a></li>
    <li><a href="apply.php">Apply</a></li>
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
     <li><a href="#" onclick="changeBGC('#000000')" ondblclick="changeBGC('#ffffff')"><span  class="glyphicon glyphicon-adjust" title="change background and text colour"></span></a></li>
    <li><a href="signup.html"><span class="glyphicon glyphicon-user" title="Make account"></span> Sign Up</a></li>
    <li><a href="login.html"><span class="glyphicon glyphicon-log-in" title="Login"></span> Login</a></li>
  </ul>
</div>  </div>
</nav>


<div class="container text-left">
<h2 id="Joat_head">News</h2>
<?php
require_once('includes/articledisplay.php');
JoatNewsDisplay();

?>



</div>


<div class="bottom_sec">
<footer >
    <form class="form-inline text-center" method="post" action="includes/news.php">Like what you see and want to get notifed of news and articles sign up:
      <input type="email" name="email" class="form-control" size="50" placeholder="Email Address">
      <select name="sub_type" class="form-control" id="sel1">
        <option>Invesment</option>
        <option>Money and the world</option>
        <option>Savings</option>
        <option>Offers</option>
        <option>Everything</option>
      </select>
      <button type="submit" class="btn btn-danger" name="submit">Sign Up</button>
    </form><br>
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
