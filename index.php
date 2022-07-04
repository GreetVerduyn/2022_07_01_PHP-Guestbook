<?php
declare(strict_types=1);

require_once ('./Models/Post.php');
require_once ('./Models/PostLoader.php');

$postLoader=new PostLoader();
$jsonArray=$postLoader->getPosts();

if(isset($_POST['message'])){
    $post=new Post($_POST['title'],'', $_POST['message'], $_POST['authorName']);
    $postLoader->savePost($post);
    //var_dump($_POST['title']);
}


//var_dump($_POST)



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
var_dump($jsonArray);
      foreach($jsonArray as $key=>$value){
          echo "<div class='title'>".$value->title."</div>";
          echo "<div class='authorName'>".$value->authorName."</div>";
          echo "<div class='message'>".$value->message."</div>";
      }
      echo "<br>";

      // Decode JSON data to PHP object
      // Loop through the object
     /* foreach($jsonArray as $key=>$value){
          echo $key . "=>" . $value . "<br>";
      }
      */?>


      <form class= "form" method="post" action="">
          <label for="title">Title:</label>
          <input type="text" id="title" name="title"><br><br>

          <label for="authorName">Name:</label>
          <input type="text" id="authorName" name="authorName"><br><br>

          <label for="message">Message:</label>
          <input type="text" id="message" name="message" class="message"><br><br>

          <input type="submit" value="Submit">
      </form>


      <hr>
      <hr>

    <footer>
    <?php include "footer.php"; ?>
    </footer>
  </body>

</html>