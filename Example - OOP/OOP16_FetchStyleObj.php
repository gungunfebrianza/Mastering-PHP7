<?php
try
{
	$con = new PDO('mysql:host=localhost;dbname=oop', 'root', '', array(PDO::ATTR_PERSISTENT => true));
	
} catch (PDOException $e){
	echo "Error!: " . $e->getMessage() . "<br/>";
	die();
}

/* Mengeksekusi prepared statement dengan melakukan operasi binding variable */
$id = 3;
$sth = $con->prepare('SELECT nama, email
    FROM table1');
$sth->bindParam(':id', $id, PDO::PARAM_INT);
$sth->execute();
$result = $sth->fetch(PDO::FETCH_OBJ);
print_r($result);
echo $result->email;
print("\n");



?>
