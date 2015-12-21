<?php
include('lib/crudclass.php');
$result = $con->exec("UPDATE table1 SET nama = 'Ayunda Faza Maudya' WHERE id = 3 ");
echo $result;
?>