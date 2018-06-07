<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-update']))
{
	$id = $_GET['edit_id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	
	if($crud->update($id, $nama, $email))
	{
		$msg = "<div class='alert alert-info'>
				<strong>Selamat</strong> Record telah berhasil diubah :) <a href='index.php'>HOME</a>!
				</div>";
	}
	else
	{
		$msg = "<div class='alert alert-warning'>
				<strong>ERROR!</strong> Update Record Gagal !
				</div>";
	}
}

if(isset($_GET['edit_id']))
{
	$id = $_GET['edit_id'];
	extract($crud->getID($id));	
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
if(isset($msg))
{
	echo $msg;
}
?>
</div>

<div class="container">
	 
     <form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Nama</td>
            <td><input type='text' name='nama' class='form-control' value="<?php echo $nama; ?>" required></td>
        </tr>
 
        <tr>
            <td>Email</td>
            <td><input type='text' name='email' class='form-control' value="<?php echo $email; ?>" required></td>
        </tr>
 
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="btn-update">
    			<span class="glyphicon glyphicon-edit"></span>  Update Record
				</button>
                <a href="index.php" class="btn btn-large btn-success">
				<i class="glyphicon glyphicon-backward"></i> &nbsp; CANCEL</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>

<div class="container">
	<div class="alert alert-success">
    <strong>Selamat Belajar :) </strong> - Jika ada pertanyaan ask me <a href="http://facebook.com/cyberelitearmy">here</a>!
	</div>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>