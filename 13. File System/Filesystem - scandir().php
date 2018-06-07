Example

List files and directories inside the images directory:
<?php
$dir = "/images/";

// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
$b = scandir($dir,1);

print_r($a);
print_r($b);
?>

Result:
Array
(
[0] => .
[1] => ..
[2] => cat.gif
[3] => dog.gif
[4] => horse.gif
[5] => myimages
)
Array
(
[0] => myimages
[1] => horse.gif
[2] => dog.gif
[3] => cat.gif
[4] => ..
[5] => .
) 