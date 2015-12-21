<?php
class Buku
{
    /* Variabel yang ada didalam kelas buku */
    private $judul;
	
	
	public function setJudul($namajudul)
	{
		$this->judul = $namajudul;
	}
  
    public function getJudul()
    {
        echo $this->judul . " <br/>";
    }
    
}

/* Buat sebuah object juki dari kelas buku */
$juki = new buku();

/* Mengakses Method/Function setJudul*/
$juki->setJudul("Access Modifier di PHP");

/* Mengakses Method/Function getJudul*/
$juki->getJudul();
?>