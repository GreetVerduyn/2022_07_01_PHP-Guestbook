<?php
declare(strict_types=1);


class PostLoader
{

   /* public function (savePost){Post $post){

      }*/


    public function getPosts(){
        return json_decode(file_get_contents());
    }
}


//Functie van BRIAN
//
//public function savePost(POST $post){
//        $data=[];
//        $data['title']=$post->getTitle();
//        $data['date']=$post->getDate();
//        $data['message']=$post->getMessage();
//        $data['author']=$post->getAuthor();;
//        var_dump($data);
//        $dataJSON = json_encode($data);
//        file_put_contents('D:\WebPages\www\challenge-php-guestbook\db\db.txt',$dataJSON,FILE_APPEND);
//    }
//
//2
//[14:32]