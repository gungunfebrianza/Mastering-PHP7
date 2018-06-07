<?php
echo  date('Y-m-d', strtotime("now"));
echo '<br>' .date('Y-m-d', strtotime("last monday"));
echo '<br>' . date('Y-m-d', strtotime("next monday +1 week"));
echo '<br>' . date('Y-m-d', strtotime("+3 week"));
echo '<br>' . date('Y-m-d', strtotime("+3 week"));
echo '<br>' . date('Y-m-d', strtotime("+23 week 5 days 3 hours 2 seconds"));
echo '<br>' . date('Y-m-d', strtotime("17 August 1945"));
?>
