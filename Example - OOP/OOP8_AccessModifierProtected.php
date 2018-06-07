<?php
class Buku
{
    /* Variabel yang ada didalam kelas buku */
    public $judul;
	protected $editor;
	
    public function getJudul()
    {
        echo $this->judul . " <br/>";
    }
	
	public function getEditor()
    {
        echo $this->editor . " <br/>";
    }
    
}

class komik extends buku
{
	public $harga;
	
	function __construct($parameter1, $parameter2, $parameter3 )
	{
		$this->judul = $parameter1;
		$this->harga = $parameter2;
		$this->editor = $parameter3;
	}
}

/* Buat sebuah object juki dari kelas buku */
$juki = new komik("Tinju Cepat OOP dengan PHP",90000,"Christa Agung Winarno");

/* Mengakses variable/property */
/* echo $juki->editor . " <br/>"; */

/* Mengakses Method/Function */
echo $juki->getEditor();
?>