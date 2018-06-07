Example
<?php
$file = "images";
if(is_dir($file))
  {
  echo ("$file is a directory");
  }
else
  {
  echo ("$file is not a directory");
  }
?>

The output of the code above could be:
images is a directory 