<?php
function validate_last_name(string $value) : string
 {
 If ((strlen($value) <= 0) || (strlen($value) > 20))
 {
 throw new Exception("Invalid Last Name");
 }
 return $value;
 }
 ?>
