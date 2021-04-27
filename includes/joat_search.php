<!DOCTYPE html>
<html lang="en">
<head>
  <title>JOAT</title>
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
<body id="body">

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
      <li ><a href="../index.html">Home</a></li>
      <li><a href="../invest.php">Investment</a></li>
    <li><a href="../card.php">Card Companies</a></li>
    <li ><a href="../news.php">News</a></li>
    <li><a href="../article.php">Articles</a></li>
    <li><a href="../apply.php">Apply</a></li>
    <li><a href="../about_us.html">About us</a></li>
    <li><a href="../contact.html">Contact us</a></li>
    <li><a href="../feedback.html">Feedback</a></li>
  </ul>


     <form class="navbar-form navbar-right" action="joat_search.php" method="POST">
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
    <li><a href="../signup.html"><span class="glyphicon glyphicon-user" title="Make account"></span> Sign Up</a></li>
    <li><a href="../login.html"><span class="glyphicon glyphicon-log-in" title="Login"></span> Login</a></li>
  </ul>
</div>  </div>
</nav>


<div class="container text-left">
<?php

require_once('dbutils.php');

function SearchJOATContent(){


$dbServername='localhost';
 $dbUsername ="root";
$dbPassword="";
$dbName="joat_project";

$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword,$dbName);


$sjc=$_REQUEST['search'];
$sql ="SELECT joat_user.user_id,joat_user.user_uid,joat_content.contentTitle,joat_content.contentshortDescription,
joat_content.contentDescription,joat_content.joat_image FROM joat_user INNER JOIN joat_content on joat_user.user_id=joat_content.user_id WHERE joat_content.contentTitle like'%$sjc%'";
  $result=mysqli_query($conn,$sql);
   $count=mysqli_num_rows($result);

  if($count >0){
	  while ($row =mysqli_fetch_assoc($result)){

  print("<a href='#' data-toggle='modal' data-target='#myModal'><img src='../joat_images/".$row['joat_image']."'height = '120'/></td></a>");

   print("<a href='#' data-toggle='modal' data-target='#myModal'>".$row['contentTitle']."</a>");
   print("<br>");
   print($row['contentshortDescription']);
   print("<br>");
 print("<br>");
 print("<br>");
 print("<br>");
 print("<div class='modal' id='myModal'>");

     print("<div class='modal-dialog modal-dialog-scrollable'>");
       print("<div class='modal-content'>");


  print(" <div class='modal-content'>");
  print(" <div class='modal-header'>");
       print("<button type='button' class='close' data-dismiss='modal'>&times;</button>");
       print("<h4 class='modal-title'>".$row['contentTitle']."</h4>");
 	  print($row['user_uid']);
     print("</div>");
     print("<div class='modal-body'>");
     print("<img src='../joat_images/".$row['joat_image']."' height = '120'/></td>");
       print("<p>".$row['contentDescription']."</p>");
     print("</div>");
     print("<div class='modal-footer'>");
       print("<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>");
     print("</div>");
   print("</div>");

 print("</div>");
 print("</div>");

 print("</div>");
}
}else {
  print('results not found try to use less words or the JOAT item');
print("<a class='edit_link'href='../index.html'><button id='btn_edit_3'>Back</button></a>");

} }

?>

<?php
SearchJOATContent()
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
