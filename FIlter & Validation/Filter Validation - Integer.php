<!DOCTYPE html>
<html>
<body>

<?php
// Variable to check
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Variable is an integer");
} else {
    echo("Variable is not an integer");
}
?>

</body>
</html>