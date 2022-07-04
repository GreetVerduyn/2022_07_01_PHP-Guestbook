<?php
declare(strict_types=1);


class PostLoader
{

    public function savePost (Post $post){
        $data=$this->getPosts();
        $opTeSlagen=[];
        $opTeSlagen['title']= $post->getTitle();
        $opTeSlagen['date']= $post->getDate();
        $opTeSlagen['message']= $post->getMessage();
        $opTeSlagen['authorName']= $post->getAuthorName();
        $data[]=$opTeSlagen;
        var_dump($data);
        $dataJSON = json_encode($data);
        file_put_contents(".\posts.json", $dataJSON);
      }


    public function getPosts(){
       $path= "./posts.json";

        $file = file_get_contents($path); // = string
        $jsonContent= json_decode($file);
        $jsonArray = $jsonContent;
        return $jsonArray;
    }
}
