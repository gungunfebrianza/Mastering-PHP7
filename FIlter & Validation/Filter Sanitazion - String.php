<!DOCTYPE html>
<html>
<body>

<?php
// Variable to check
$str = "<h1>Hello World!</h1>";

// Remove HTML tags from string
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>

</body>
</html>