<?php

function connect() {
  //function to connect to the database
   $username = 'Farhan';
  $password = 'Farhan3712356';
  $mysqlhost = 'localhost';
  $dbname = 'joat_project';
  $pdo = new PDO('mysql:host='.$mysqlhost.';dbname='.$dbname.';charset=utf8', $username, $password);
  if ( $pdo) {
    // make errors throw exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } else {
    die("Could not create PDO connection.");
  }
}

function connect_2() {
  //function to connect to the database
  $dbUsername ="root";
$dbPassword="";
$dbName="joat_project";

$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword,
$dbName);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
}

function setUpSession() {
  session_start();
}

function htmlTable( $pdo, $table) {
//display records from the database
  $sql = "DESCRIBE `".$table."`";
  $stmt = $pdo->query( $sql);
  print "<table>";

  print "<tr>";

  foreach( $stmt as $v) {

    print "<th>".$v['Field']."</th>";

  }

  print "</tr>";

  $sql = "SELECT * FROM `".$table."`";

  // specify only an associative array to be returned
  $stmt = $pdo->query( $sql, PDO::FETCH_ASSOC);

  foreach( $stmt as $row) {

    print "<tr>";
	//print"<button>Accept</button>";
    foreach( $row as $v) {
		//print"<button>Accept</button>";
      print "<td>".$v."</td>";
		//print "<button>Accept</button>";
    }

    print "</tr>";
	//print "<button>Accept</button>";
  }
	//
  print "</table>";
	//print "<button>Accept</button>";
}

function htmlTable_4( $pdo, $table) {
  //make all content from a table be shown
  $sql = "DESCRIBE `".$table."`";
  $stmt = $pdo->query( $sql);
  print "<table>";

  print "<tr>";

  foreach( $stmt as $v) {
print"<th></th>";

    print "<th>".$v['Field']."</th>";
	//print"<th></th>";

  }

  print "</tr>";


  $sql = "SELECT * FROM `".$table."`";

  // specify only an associative array to be returned
  $stmt = $pdo->query( $sql, PDO::FETCH_ASSOC);

  foreach( $stmt as $row) {

    print "<tr>";

    foreach( $row as $v) {
      print "<td>".$v."</td>";

	  print"<td></td>";

    }
	  print("<td><a class='edit_link_3'href='?deletionid_2=".$row['app_id']."' class='link'>Delete</a></td>");
	//print("<td><a class='edit_link_4'href='app.php?aid=$row[app_id]&tn=$row[firstname]&ts=$row[surname]&em=$row[email]&xp=$row[expertise]&av=$row[availability]'>Approve</a></td>");

	//print("<td><a class='edit_link_4'href='?approveid_2=".$row['app_id']."' class='link'>Approve</a></td>");

    print "</tr>";
  }
	//
  print "</table>";

}

function htmlTable_3( $pdo, $table) {
  $sql = "DESCRIBE `".$table."`";
  $stmt = $pdo->query( $sql);
  print "<table>";

  print "<tr>";

  foreach( $stmt as $v) {

    print "<th>".$v['Field']."</th>";

  }

  print "</tr>";
  $sql = "SELECT * FROM `".$table."`";

  // specify only an associative array to be returned
  $stmt = $pdo->query( $sql, PDO::FETCH_ASSOC);

  foreach( $stmt as $row) {

    print "<tr>";

    foreach( $row as $v) {

      print "<td>".$v."</td>";

    }
	  print("<td><a class='edit_link_3'href='?deletionid=".$row['contentID']."' class='link'>Delete</a></td>");
	print("<td><a class='edit_link_4'href='content_update.php?cid=$row[contentID]&ct=$row[contentTitle]&csd=$row[contentshortDescription]&jcd=$row[contentDescription]&jmt=$row[joat_made_content]'>Edit</a></td>");

    print "</tr>";

  }
	//
  print "</table>";

}

function deleteRecord_3( $pdo, $deletionid) {
//delete a record from the table list
 $errorMessage = "";
 $stmt = $pdo->prepare("SELECT * FROM `joat_content` WHERE `contentID`=?");
  $stmt->execute( array( $deletionid));
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if ( count( $rows) == 1) {
    // delete database record
    $stmt = $pdo->prepare("DELETE FROM `joat_content` WHERE `contentID`=?");
    $stmt->execute( array( $deletionid));
    $affected_rows = $stmt->rowCount();
//header ('location:application.php');
  } else if (count( $rows) > 1) {
    $errorMessage .= "ID matches more than one record. ";
  } else {
    $errorMessage .= "ID not found: nothing to delete. ";
  }
  return $errorMessage;
}

function deleteRecord_2( $pdo, $deletionid) {
//delete a record from the table list
 $errorMessage = "";
 $stmt = $pdo->prepare("SELECT * FROM `joat_app` WHERE `app_id`=?");
  $stmt->execute( array( $deletionid));
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if ( count( $rows) == 1) {
    // delete database record
    $stmt = $pdo->prepare("DELETE FROM `joat_app` WHERE `app_id`=?");
    $stmt->execute( array( $deletionid));
    $affected_rows = $stmt->rowCount();
//header ('location:application.php');
  } else if (count( $rows) > 1) {
    $errorMessage .= "ID matches more than one record. ";
  } else {
    $errorMessage .= "ID not found: nothing to delete. ";
  }
  return $errorMessage;
}

/*function uidExists($pdo, $joatusername){
  $sql="SELECT * from joat_user WHERE user_uid =?;";
  $stmt =mysqli_stmt_init($pdo);
}


function joatlogin($pdo, $joatuser, $joatpwd){
if (){
  echo"Either username or password do not match please try again";
  echo"<a href='../login.html'><button type='button' class='btn btn-primary btn-lg' >return to Login</button></a>";
}
  $hashpwd= $uidExists['user_pwd'];
  $passwordchkd= password_verify($joatpwd,$hashpwd);

  if($passwordchkd ===false){
    echo"Either username or password do not match please try again";
    echo"<a href='../login.html'><button type='button' class='btn btn-primary btn-lg' >return to Login</button></a>";
  } elseif ($passwordchkd=== true) {
    session_start();
    $_SESSION["user_id"] = $uidExists['user_id'];
    $_SESSION["user_uid"] = $uidExists['user_uid'];

  }
}*/
?>
