<?php
  $token = hash('whirlpool', '0609458237');
  echo $token;
  if ($token == '162d7b1f4a47d0f9de80650a72f6b764e07d52bdd53597a2cb4beba7f8d8954f91dc43f54fb9f9a9') {
    echo "true";
  }
  else {
    echo "booo";
  }
?>
