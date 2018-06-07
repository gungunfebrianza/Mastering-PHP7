<?php
class book
{
    public $title = "Mastering PHP 7";
    public $author = "Gun Gun Febrianza";
    public $volume;
    public $price;

    public function getTitle()
    {
        return $this->title . " Written by " . $this->author;
    }
}
  $product1 = new book();
  print $product1->getTitle();
