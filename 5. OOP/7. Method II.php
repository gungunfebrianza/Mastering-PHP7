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
$product1->title = "Mastering PHP 7 (2018)";
$product1->author = "Gun Gun Febrianza";
$product1->volume = "5";
$product1->price = 125000.99;
print "author: {$product1->getTitle()}\n";
