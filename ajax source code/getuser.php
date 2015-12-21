<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
include('crudclass.php');
$q = intval($_GET['q']);
$result = $con->query("SELECT * FROM table1 WHERE id = '".$q."'");

echo "<table>
<tr>
<th>Nama</th>
<th>Email</th>
</tr>";
foreach ($result as $res) :
    echo "<tr>";
    echo "<td>" . $res['nama'] . "</td>";
    echo "<td>" . $res['email'] . "</td>";
    echo "</tr>";
endforeach;
echo "</table>";
$con = null;
?>
</body>
</html>