<?php
include('lib/crudclass.php');
$result = $con->exec("DELETE FROM table1 WHERE id = 4 ");
echo $result;
?>