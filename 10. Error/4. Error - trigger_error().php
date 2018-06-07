<?php
/*
256 	E_USER_ERROR (integer) 	User-generated error message. This is like an E_ERROR, except it is generated in PHP code by using the PHP function trigger_error().
512 	E_USER_WARNING (integer) 	User-generated warning message. This is like an E_WARNING, except it is generated in PHP code by using the PHP function trigger_error().
1024 	E_USER_NOTICE (integer) 	User-generated notice message. This is like an E_NOTICE, except it is generated in PHP code by using the PHP function trigger_error().
*/
if (0 == 0) {
    trigger_error("Cannot divide by zero", 1024);
}
