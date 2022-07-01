<?php
declare(strict_types=1);


class
Post
{
    private string $title;
    private string $date;
    private string $content;
    private string $authorName;

    public function __construct(string $date, string $authorName ) {
        $this->date = $date;
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


    public function getContent(): string
    {
        return $this->content;
    }
    public function setContent(string $content)
    {
        $this->content = $content;
    }


    public function getAuthorName(): string
    {
        return $this->authorName;
    }









}