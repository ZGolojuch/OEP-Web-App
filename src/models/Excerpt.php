<?php

class Excerpt {
    private $title;
    private $information;
    private $image;

    public function __construct($title, $information, $image)
    {
        $this->title = $title;
        $this->information = $information;
        $this->image = $image;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getInformation(): string
    {
        return $this->information;
    }

    public function setInformation($information)
    {
        $this->information = $information;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
}