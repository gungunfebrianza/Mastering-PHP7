<?php
   class  Buku{
   /* Variabel yang ada didalam kelas buku */
      var $judul;
      var $harga;
      
	  /* Sekumpulan Method yang ada didalam kelas buku */
      function SetHarga($parameter){
         $this->harga = $parameter;
      }
      
	  /*br adalah tag html untuk membuat garis baru */
      function GetHarga(){
         echo $this->harga ."<br/>";
      }
      
      function SetJudul($parameter){
         $this->judul = $parameter;
      }
      
      function GetJudul(){
         echo $this->judul ." <br/>";
      }

   }
   
	$Fisika = new Buku;
	$Matematika = new Buku;
   
	$Fisika->setJudul( "Fisika Dasar untuk Engineer" );
	$Matematika->setJudul( "Matematika Dasar untuk Engineer" );

	$Fisika->setHarga( 80000 );
	$Matematika->setHarga( 100000 );
	
	$Fisika->getJudul();
	$Fisika->getHarga();
	$Matematika->getJudul();
	$Matematika->getHarga();
?>