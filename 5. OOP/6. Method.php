<?php
class ShopProduct
{
    public $title = "default product";
    public $producerMainName = "main name";
    public $producerFirstName = "first name";
    public $price = 0;

    public function getProducer()
    {
        return $this->producerFirstName . " ". $this->producerMainName;
    }
}
  $product1 = new ShopProduct();
  print $product1->getProducer();
