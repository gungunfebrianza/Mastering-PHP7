Example 1

Read 10 bytes from file:
<?php
$file = fopen("test.txt","r");
fread($file,"10");
fclose($file);
?>
Example 2

Read entire file:
<?php
$file = fopen("test.txt","r");
fread($file,filesize("test.txt"));
fclose($file);
?> 