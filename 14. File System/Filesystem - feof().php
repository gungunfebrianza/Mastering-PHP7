 <?php
$file = fopen("test.txt", "r");

//Output a line of the file until the end is reached
$line = fgets($file);
while(! feof($file))
{
  echo $line. "<br />";
  $line = fgets($file);
}

fclose($file);
?>

The output of the code above will be:
Hello, this is a test file.
There are three lines here.
This is the last line. 