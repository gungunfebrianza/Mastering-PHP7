<?php
class Buku
{
    /* Variabel yang ada didalam kelas buku */
    public $judul;
  
    public function getJudul()
    {
        echo $this->judul . " <br/>";
    }
    
}

/* Buat sebuah object juki dari kelas buku */
$juki = new buku();
$juki->judul="Tinju Cepat OOP dengan PHP";

/* Mengakses variable/property */
echo $juki->judul . " <br/>";

/* Mengakses Method/Function */
echo $juki->getJudul();
?>