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
?>
