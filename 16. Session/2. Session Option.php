
<?php
// This sends a persistent cookie that lasts a day.
session_start([
    'cookie_lifetime' => 86400,
]);
?>
