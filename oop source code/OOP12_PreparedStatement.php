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
    FROM table1
    WHERE id = :id');
$sth->bindParam(':id', $id, PDO::PARAM_INT);
$sth->execute();
$st = $sth->fetch();
echo "Nama : " .$st['nama'] . "<br>";
echo "Email : " .$st['email'] . "<br>";

$id= 1;
$sth->execute();
$st = $sth->fetch();
echo "Nama : " .$st['nama'] . "<br>";
echo "Email : " .$st['email'];

/*Prepared statement menggunakan variable Question Mark Placeholder*/
$id = 2;
$email = 'CAW@email.com';
$sth = $con->prepare('SELECT nama
    FROM table1
    WHERE id = ? AND email = ?');
$sth->bindParam(1, $id, PDO::PARAM_INT);
$sth->bindParam(2, $email, PDO::PARAM_STR, 15);
$sth->execute();
$st = $sth->fetch();
echo "<br> <br> Nama : " .$st['nama'] . "<br>";




?>
