<?php
include('lib/crudclass.php');
$result = $con->exec("INSERT INTO table1 (nama, email) VALUES ('mod', 'mod@gmail.com')");
echo $result;
?>