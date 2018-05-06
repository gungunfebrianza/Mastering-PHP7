<?php
if (!isset($_COOKIE['firsttime']))
{
   setcookie("firsttime", "no", 2147483647);
   header('Location: websitelink.com');
   exit();
}
else
{
   header('Location: websitelink2.com');
   exit();
}
?>
