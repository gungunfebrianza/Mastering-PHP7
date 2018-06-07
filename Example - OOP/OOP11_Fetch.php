<?php
include('lib/crudclass.php');
$result = $con->query('SELECT nama, email FROM table1 where id = 3');
$res =  $result->fetch();
$nama = $res[0];
$email = $res[1];
echo $nama . " - " . $email;
?>