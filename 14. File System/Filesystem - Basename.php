<?php
$path = "/testweb/home.php";

//Show filename with file extension
echo basename($path) ."<br/>";

//Show filename without file extension
echo basename($path,".php");

//The output of the code above will be:
//home.php
//home
?>
