<?php
declare(strict_types=1);


class
Post
{
    private string $title;
    private string $date;
    private string $message;
    private string $authorName;

    public function __construct(string $title, string $date, string $message, string $authorName ) {
        $this->date = $date;
        $this->title = $title;
        $this->message=$message;
        $this->authorName= $authorName;
    }



    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $title)
    {
        $this->title = $title;
    }


    public function getDate(): string
    {
        return $this->date;
    }


    public function getMessage(): string
    {
        return $this->message;
    }
    public function setMessge(string $message)
    {
        $this->content = $message;
    }


    public function getAuthorName(): string
    {
        return $this->authorName;
    }









}