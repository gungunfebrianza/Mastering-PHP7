<?php
class book
{
    public $title;
    public $author;
    public $volume;
    public $price;
}
  $product1 = new book();
  $product1->title = "Mastering Bitcoin Scripting";
  $product1->pages = "550";
  print $product1->pages;
