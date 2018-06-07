<?php
class ShopProduct
{
    public $title = "default product";
    public $producerMainName = "main name";
    public $producerFirstName = "first name";
    public $price = 0;

    public function getProducer()
    {
        return $this->producerFirstName . " "
. $this->producerMainName;
    }
}
  $product1 = new ShopProduct();
  $product1->title = "Bitcoin";
  $product1->arbitraryAddition = "ethereum";
  print $product1->arbitraryAddition;
