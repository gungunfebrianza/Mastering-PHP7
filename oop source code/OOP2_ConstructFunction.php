<?php
   class  Buku{
   /* Variabel yang ada didalam kelas buku */
      var $judul;
      var $harga;
      
	  /*br adalah tag html untuk membuat garis baru */
      function getHarga(){
         echo $this->harga ."<br/>";
      }
       
      function getJudul(){
         echo $this->judul ." <br/>";
      }
	  
	  /* Fungsi Spesial Construct didalam kelas buku */
	  function __construct( $parameter1, $parameter2 ){
	  $this->judul = $parameter1;
      $this->harga = $parameter2;
}
   }
   
	$Fisika = new Buku( "Fisika Dasar untuk Engineer", 85000 );
	$Matematika = new Buku( "Matematika Dasar untuk Engineer", 95000 );
   
	$Fisika->getJudul();
	$Fisika->getHarga();
	$Matematika->getJudul();
	$Matematika->getHarga();
?>