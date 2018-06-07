<?php
class book
{
    public $title;
    public $author;
    public $volume;
    public $price;

    public function __construct(
      string $title,
      string $author,
      int $volume = 0,
      float $price
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->volume = $volume;
        $this->price = $price;
    }
    public function getTitle()
    {
        return $this->title . " Written by " . $this->author;
    }

    public function getPrice()
    {
        $base = "{$this->title} ( {$this->author}, ";
        $base .= "{$this->price} )";
        return $base;
    }
}

class bookSeries extends book
{
    public function getVolume()
    {
        return $this->volume;
    }
}

$buku = new bookSeries("Mastering PHP 7", "Gun Gun Febrianza", 3, 125000.999);
print "Series Ke : {$buku->getVolume()}\n";
print "Harga : {$buku->getPrice()}\n";
