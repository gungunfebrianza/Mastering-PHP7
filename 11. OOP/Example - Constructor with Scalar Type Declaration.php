<?php
class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price = 0;

    public function __construct(string $title, string $firstName, string $mainName, float $price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }
}

// will fail
//$product = new ShopProduct("title", "first", "main", []);

//Behind the scenes, the string "4.22" becomes the float 4.22
$product = new ShopProduct("title", "first", "main", "4.22");
