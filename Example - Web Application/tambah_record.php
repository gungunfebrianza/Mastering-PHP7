<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	
	if($crud->buat($nama,$email))
	{
		header("Location: tambah_record.php?inserted");
	}
	else
	{
		header("Location: tambah_record.php?failure");
	}
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

<?php
if(isset($_GET['inserted']))
{
	?>
    <div class="container">
	<div class="alert alert-info">
    <strong>Selamat!</strong> Record telah sukses tersimpan <a href="index.php">HOME</a>!
	</div>
	</div>
    <?php
}
else if(isset($_GET['failure']))
{
	?>
    <div class="container">
	<div class="alert alert-warning">
    <strong>ERROR!</strong> Record Gagal disimpan !
	</div>
	</div>
    <?php
}
?>

<div class="clearfix"></div><br />

<div class="container">

 	
	 <form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Nama</td>
            <td><input type='text' name='nama' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>Email</td>
            <td><input type='text' name='email' class='form-control' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Tambah Record
			</button>  
            <a href="index.php" class="btn btn-large btn-success">
			<i class="glyphicon glyphicon-backward"></i> &nbsp; Kembali ke halaman utama</a>
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