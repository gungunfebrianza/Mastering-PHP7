
Definition and Usage

The FILTER_SANITIZE_URL filter removes all illegal URL characters from a string.

This filter allows all letters, digits and $-_.+!*'(),{}|\\^~[]`"><#%;/?:@&=

    Name: "url"
    ID-number: 518

Example
<?php
$var="https://www.w3schoo??ls.co?m";

var_dump(filter_var($var, FILTER_SANITIZE_URL));
?>

The output of the code will be:
string(24) "https://www.w3schools.com" 