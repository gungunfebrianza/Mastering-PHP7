<?php
class book
{
    public $title;
    public $author;
    public $volume;
    public $price;

    public function __construct($title, $author, $volume, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->volume = $volume;
        $this->price = $price;
    }
    public function getTitle()
    {
        return $this->title . " Written by " . $this->author;
    }
}

$product1 = new book(
    "Mastering PHP 7",
    "Gun Gun Febrianza",
    "3",
    125000.99
  );
print "author: {$product1->getTitle()}\n";
