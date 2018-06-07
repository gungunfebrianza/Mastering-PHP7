<!DOCTYPE html>
<html>
<body>

<?php
// Variable to check
$email = "john(.doe)@exa//mple.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

echo $email;
?>

</body>
</html>