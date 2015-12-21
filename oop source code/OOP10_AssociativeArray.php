<?php
/*set (membuat) sebuah Associative array*/
$umur = array("GGF"=>"23", "Christa"=>"37", "Maudy"=>"21");

/*get (mendapatkan) sebuah elemen dalam sebuah array*/
$elemen = $umur['GGF'];
echo $elemen . "<br>";

/*Menggunakan foreach*/
foreach ($umur as $key=>$umu)
{
	echo  $key . "=" . $umu . "<br>";
}
?>


