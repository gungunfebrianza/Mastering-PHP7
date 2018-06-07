Definition and Usage

The FILTER_SANITIZE_NUMBER_FLOAT filter removes all illegal characters from a float number.

This filter allows digits and + - by default

    Name: "number_float"
    ID-number: 520

Possible flags:

    FILTER_FLAG_ALLOW_FRACTION - Allow fraction separator (like . )
    FILTER_FLAG_ALLOW_THOUSAND - Allow thousand separator (like , )
    FILTER_FLAG_ALLOW_SCIENTIFIC - Allow scientific notation (like e and E)

Example
<?php
$number="5-2f+3.3pp";

var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_FLOAT,
FILTER_FLAG_ALLOW_FRACTION));
?>

The output of the code will be:
string(7) "5-2+3.3" 