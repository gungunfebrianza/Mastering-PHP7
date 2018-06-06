/*
There is no integer division operator in PHP. 1/2 yields the float 0.5.
The value can be casted to an integer to round it towards zero,
or the round() function provides finer control over rounding.
*/
<?php
var_dump(25/7);         // float(3.5714285714286)
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4)
?>
