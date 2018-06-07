 <?php
$file = "test.txt";
if(is_file($file))
  {
  echo ("$file is a regular file");
  }
else
  {
  echo ("$file is not a regular file");
  }
?>

The output of the code above could be:
test.txt is a regular file 