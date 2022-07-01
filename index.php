<?php
declare(strict_types=1);

require_once ('./Models/Post.php');
require_once ('./Models/PostLoader.php');



$path= "./posts.json";

$file = file_get_contents($path); // = string
//var_dump($file);

$jsonContent= json_decode($file);
//$jsonContent2= json_decode($file, true);
$jsonArray = $jsonContent->posts;
//$jsonArray2 = $jsonContent2->posts; //array
var_dump('jsonArray',$jsonArray);
echo '<br>';
echo '<br>';


//var_dump('jsonArray2', $jsonArray2);

?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Guest Book</title>
      <link rel="stylesheet" href="styles.css">
  </head>
  <body>
      <header>
          <?php include "header.php"; ?>
      </header>
      <hr>
      <hr>


      <?php
      // Decode JSON data to PHP associative array
      // Loop through the associative array

      foreach($jsonArray as $key=>$value){
          echo $key . "=>" . $value->title . "<br>";
      }
      echo "<br>";

      // Decode JSON data to PHP object
      // Loop through the object
     /* foreach($jsonArray as $key=>$value){
          echo $key . "=>" . $value . "<br>";
      }
      */?>


      <form action="">
          <label for="title">Title:</label>
          <input type="text" id="title" name="title"><br><br>

          <label for="name">Name:</label>
          <input type="text" id="name" name="name"><br><br>

          <label for="lname">Last name:</label>
          <input type="text" id="lname" name="lname"><br><br>

          <input type="submit" value="Submit">
      </form>


      <hr>
      <hr>

    <footer>
    <?php include "footer.php"; ?>
    </footer>
  </body>

</html>