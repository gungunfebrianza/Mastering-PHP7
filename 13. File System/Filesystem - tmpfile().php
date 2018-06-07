 <?php
$temp = tmpfile();

fwrite($temp, "Testing, testing.");
//Rewind to the start of file
rewind($temp);
//Read 1k from file
echo fread($temp,1024);

//This removes the file
fclose($temp);
?>

The output of the code above will be:
Testing, testing. 