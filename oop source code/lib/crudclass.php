<?php
try
{
$con = new PDO("mysql:host=localhost;dbname=oop","root","");
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
?>