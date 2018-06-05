/*
is_scalar — Finds whether a variable is a scalar
Scalar variables are those containing an integer, float, string or boolean.
Types array, object and resource are not scalar.

Return Values:
Returns TRUE if var is a scalar, FALSE otherwise.

*/
<?php
function show_var($var)
{
    if (is_scalar($var)) {
        echo $var;
    } else {
        var_dump($var);
    }
}
$pi = 3.1416;
$proteins = array("hemoglobin", "cytochrome c oxidase", "ferredoxin");

show_var($pi);
show_var($proteins)

?>
/*
3.1416
array(3) {
  [0]=>
  string(10) "hemoglobin"
  [1]=>
  string(20) "cytochrome c oxidase"
  [2]=>
  string(10) "ferredoxin"
}
*/
