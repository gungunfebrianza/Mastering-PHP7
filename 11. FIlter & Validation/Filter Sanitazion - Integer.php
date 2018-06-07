 <?php
$number="5-2+3pp";

var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_INT));
?>

The output of the code will be:
string(5) "5-2+3" 