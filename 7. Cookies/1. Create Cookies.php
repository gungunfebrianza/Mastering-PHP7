<?php
//the cookie expires after one hour.
setcookie("lastvisit", date("H:i:s"), time() + 3600);

if (isset($_COOKIE['lastvisit'])) {
    echo "Last visit: " . $_COOKIE['lastvisit'];
}
