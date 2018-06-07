<?php
if (!file_exists("welcome.txt")) {
    die("File not found");
    echo "You can not see me because script has been stopped!";
} else {
    $file=fopen("welcome.txt", "r");
}
