<?php
//the cookie expires after one hour.
setcookie("lastvisit", date("H:i:s"), time() + 3600, "/7. Cookies");

if (isset($_COOKIE['lastvisit'])) {
    echo "Last visit: " . $_COOKIE['lastvisit'];
}
