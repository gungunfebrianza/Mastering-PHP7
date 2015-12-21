<?php
include('lib/crudclass.php');
$result = $con->query('SELECT * FROM table1');
foreach ($result as $res) :
echo $res['nama'] . " <br/>";
endforeach;
?>