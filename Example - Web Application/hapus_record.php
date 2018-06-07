<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-del']))
{
	$id = $_GET['delete_id'];
	$crud->hapus($id);
	header("Location: hapus_record.php?deleted");	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Finishing Touch</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" > 
<link href="bootstrap/css/main.css" rel="stylesheet" > 
</head>

<body>

<div class="container">

	<?php
	if(isset($_GET['deleted']))
	{
		?>
        <div class="alert alert-success">
    	<strong>Success!</strong> record telah dihapus... 
		</div>
        <?php
	}
	else
	{
		?>
        <div class="alert alert-danger">
    	<strong>Perhatian</strong> apa anda yakin akan menghapusnya ? 
		</div>
        <?php
	}
	?>	
</div>

<div class="container">
 	
	 <?php
	 if(isset($_GET['delete_id']))
	 {
		 ?>
         <table class='table table-bordered'>
         <tr>
         <th>#</th>
         <th>nama</th>
         <th>Email</th>
         </tr>
         <?php
         $stmt = $con->prepare("SELECT * FROM table1 WHERE id=:id");
         $stmt->execute(array(":id"=>$_GET['delete_id']));
         while($row=$stmt->fetch(PDO::FETCH_BOTH))
         {
             ?>
             <tr>
             <td><?php echo($row['id']); ?></td>
             <td><?php echo($row['nama']); ?></td>
             <td><?php echo($row['email']); ?></td>
             </tr>
             <?php
         }
         ?>
         </table>
         <?php
	 }
	 ?>
</div>

<div class="container">
<p>
<?php
if(isset($_GET['delete_id']))
{
	?>
  	<form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
    <button class="btn btn-large btn-primary" type="submit" name="btn-del">
	<i class="glyphicon glyphicon-trash"></i> &nbsp; YES</button>
    <a href="index.php" class="btn btn-large btn-success">
	<i class="glyphicon glyphicon-backward"></i> &nbsp; NO</a>
    </form>  
	<?php
}
else
{
	?>
    <a href="index.php" class="btn btn-large btn-success">
	<i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>
    <?php
}
?>
</p>
</div>	

<div class="container">
	<div class="alert alert-success">
    <strong>Selamat Belajar :) </strong> - Jika ada pertanyaan ask me <a href="http://facebook.com/cyberelitearmy">here</a>!
	</div>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>