<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <title>JOAT | user</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="../web_app.css"> <!--own stylesheet-->
  <script type="text/javascript" src="../web_app_js.js"></script> <!--own javascript file-->
  <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico"> <!--adds a image to the title-->


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .space{
    padding-bottom: 80px;
  }
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 85%;
    }

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a href="home.html"><img class ="logo" src="../image/logo2.jpg" alt="Logo" title="return to mainpage"></a>

    </div>
    <!--content for collapse narbar-->
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php">Dashboard</a></li>
        <li><a href="application.php">Applications</a></li>
        <li class="active"><a href="joat_user.html">Users</a></li>
        <li ><a href="asset.html">Assets</a></li>
        <li ><a href="content_add.html">Create Content</a></li>
        <li ><a href="content_view.php">View articles</a></li>
        <li><a href="content_news.php">View News</a></li>
        <li><a href="content_report.php">Reports</a></li>
        <li><a href="../logout.php">log out</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">

    <div class="col-sm-3 sidenav hidden-xs">
      <div class="space"><a href="home.html"><img class ="logo" src="../image/logo2.jpg" alt="Logo" title="return to mainpage"></a>
      </div>

      <ul class="nav nav-pills nav-stacked">
        <li ><a href="home.php">Dashboard</a></li>
        <li><a href="application.php">Applications</a></li>
        <li><a href="joat_user.html">Users</a></li>
        <li class="active"><a href="asset.html">Assets</a></li>
        <li ><a href="content_add.html">Create Content</a></li>
        <li ><a href="content_view.php">View articles</a></li>
        <li><a href="content_news.php">View News</a></li>
        <li><a href="content_report.php">Reports</a></li>
        <li><a href="../logout.php">log out</a></li>
      </ul><br>
    </div>
<br>
    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Some text..</p>
      </div>
    <div class="container">
      <h2 id="Joat_head">JOAT user</h2>
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
     $Uname = $_REQUEST['username'];
     $email = $_REQUEST['email'];
     $password = $_REQUEST['pwd'];
     $app_type=$_REQUEST['acc_type'];

    $hash=password_hash($password, PASSWORD_DEFAULT);
    $check=htmlspecialchars($Uname);
  	$check_2=htmlspecialchars($email);

  $sql = "INSERT INTO joat_user (user_first, user_uid, user_email, user_pwd, user_type)
  	values('$firstname','$check','$check_2','$hash','$app_type')";



  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
  echo "<div class='col-sm-4'>
  <a href='joat_user.html'><button type='button' class='btn btn-primary btn-lg'>Home</button></a>
  </div>";

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
</div></div>
</div></div>
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
