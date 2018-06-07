<?php
class Buku
{
    /* Variabel yang ada didalam kelas buku */
    private $judul;
	public $test;
	
	public function setJudul($namajudul)
	{
		$this->judul = $namajudul;
		$this->test = $this->judul;
	}
  
    private function getJudul()
    {
        echo $this->test . " <br/>";
    }
    
}

/* Buat sebuah object juki dari kelas buku */
$juki = new buku();

/* Mengakses Method/Function setJudul*/
$juki->setJudul("Access Modifier di PHP");

/* Mengakses Method/Function getJudul*/
$juki->getJudul();

?>