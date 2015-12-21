<?php
/*set (membuat) sebuah array*/
$motor = array("Ninja","CBR","R15","Tiger");

/*get (mendapatkan) sebuah elemen dalam sebuah array*/
$elemen = $motor[2];
echo $elemen . "<br>";

/*Menggunakan foreach*/
foreach ($motor as $moto)
{
	echo  $moto . "<br>";
}

/*Menghitung elemen yang ada didlam sebuah array*/
$hitung = count($motor);
echo $hitung . "<br>";

/*Menggunakan for*/
for ($i=0; $i < count($motor); $i++)
{
	echo $motor[$i] . "<br>";
}
?>