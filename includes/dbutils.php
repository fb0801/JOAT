<?php

function connect() {
  //function to connect to the database
   $username = 'Farhan';
  $password = 'Farhan3712356';
  $mysqlhost = 'localhost';
  $dbname = 'joat';
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
$dbName="joat_2";

$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword,
$dbName);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
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
?>
