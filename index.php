<?php
declare(strict_types=1);

require_once ('./Models/Post.php');
require_once ('./Models/PostLoader.php');



$path= "./posts.json";

$file = file_get_contents($path); // = string
$jsonContent= json_decode($file);
$jsonArray = $jsonContent->posts;
//var_dump('jsonArray',$jsonArray);



?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
      <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
      <meta http-equiv="Pragma" content="no-cache" />
      <meta http-equiv="Expires" content="0" />
    <meta charset="utf-8">
    <title>Guest Book</title>
      <link rel="stylesheet" href="styles.css" type="text/css">
  </head>
  <body>
   <!-- <header>
          <?php /*include "header.php"; */?>
      </header-->
      <hr>
      <hr>


      <?php

      foreach($jsonArray as $key=>$value){
          echo "<div class='title'>".$value->title."</div>";
          echo "<div class='author'>".$value->author_name."</div>";
          echo "<div class='content'>".$value->content."</div>";
      }
      echo "<br>";

      // Decode JSON data to PHP object
      // Loop through the object
     /* foreach($jsonArray as $key=>$value){
          echo $key . "=>" . $value . "<br>";
      }
      */?>


      <form class= "form" action="">
          <label for="title">Title:</label>
          <input type="text" id="title" name="title"><br><br>

          <label for="name">Name:</label>
          <input type="text" id="name" name="name"><br><br>

          <label for="message">Message:</label>
          <input type="text" id="message" name="message"><br><br>

          <input type="submit" value="Submit">
      </form>


      <hr>
      <hr>

    <footer>
    <?php include "footer.php"; ?>
    </footer>
  </body>

</html>