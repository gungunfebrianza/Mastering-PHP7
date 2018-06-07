Definition and Usage

The FILTER_VALIDATE_BOOLEAN filter validates value as a boolean option.

    Name: "boolean"
    ID-number: 258

Possible return values:

    Returns TRUE for "1", "true", "on" and "yes"
    Returns FALSE for "0", "false", "off" and "no"
    Returns NULL otherwise.

Example
<?php
$var="yes";

var_dump(filter_var($var, FILTER_VALIDATE_BOOLEAN));
?>

The output of the code will be:
bool(true) 