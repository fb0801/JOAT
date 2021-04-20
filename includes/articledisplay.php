<?php
require_once('dbutils.php');

function JoatArticleDisplay(){
$pdo=connect();
$results = $pdo->query("SELECT joat_user.user_id,joat_user.user_uid,joat_content.contentTitle,joat_content.contentshortDescription,
joat_content.contentDescription,joat_content.joat_image FROM joat_user INNER JOIN joat_content on joat_user.user_id=joat_content.user_id WHERE joat_content.joat_made_content='Article'",
PDO::FETCH_ASSOC);



foreach ($results as $row) {
  print ("<a href='' data-toggle='modal' data-target='#myModal'>".row['contentTitle']"</a>");
  print("");
  print("<img src='joat_images/".$row['joat_image']."' height = '120'/></td>");
  print(".row['contentshortDescription'].");
echo"  <div class='modal' id='myModal'>
    <div class='modal-dialog modal-dialog-scrollable'>
      <div class='modal-content'>


  <div class='modal-content'>
    <div class='modal-header'>
      <button type='button' class='close' data-dismiss='modal'>&times;</button>";
      print("
      <h4 class='modal-title'>".$row['contentTitle']."</h4>");
    print("</div>");
    print("<div class='modal-body'>");
    print("<img src='joat_images/".$row['joat_image']."' height = '120'/></td>");
      print("<p>".$row['contentDescription']."</p>"
    print("</div>");
    print("<div class='modal-footer'>");
      print("<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>");
    print("</div>");
  print("</div>");

print("</div>");
print("</div>");

print("</div>");
}


}

function JoatNewsDisplay(){
$pdo=connect();
$results = $pdo->query("SELECT joat_user.user_id,joat_user.user_uid,joat_content.contentTitle,joat_content.contentshortDescription,
joat_content.contentDescription,joat_content.joat_image FROM joat_user INNER JOIN joat_content on joat_user.user_id=joat_content.user_id WHERE joat_content.joat_made_content='News'",
PDO::FETCH_ASSOC);



foreach ($results as $row) {
  print ("<a href='' data-toggle='modal' data-target='#myModal'>".row['contentTitle']"</a>");
  print("");
  print("<img src='joat_images/".$row['joat_image']."' height = '120'/></td>");
  print(".row['contentshortDescription'].");
echo"  <div class='modal' id='myModal'>
    <div class='modal-dialog modal-dialog-scrollable'>
      <div class='modal-content'>


  <div class='modal-content'>
    <div class='modal-header'>
      <button type='button' class='close' data-dismiss='modal'>&times;</button>";
      print("
      <h4 class='modal-title'>".$row['contentTitle']."</h4>");
    print("</div>");
    print("<div class='modal-body'>");
    print("<img src='joat_images/".$row['joat_image']."' height = '120'/></td>");
      print("<p>".$row['contentDescription']."</p>"
    print("</div>");
    print("<div class='modal-footer'>");
      print("<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>");
    print("</div>");
  print("</div>");

print("</div>");
print("</div>");

print("</div>");
}


}
 ?>
