Example 1

Convert some HTML entities to characters:
<?php
$str = "Albert Einstein said: &#039;E=MC&sup2;&#039;";
echo html_entity_decode($str, ENT_COMPAT); // Will only convert double quotes
echo "<br>";
echo html_entity_decode($str, ENT_QUOTES); // Converts double and single quotes
echo "<br>";
echo html_entity_decode($str, ENT_NOQUOTES); // Does not convert any quotes
?>

The HTML output of the code above will be (View Source):
Albert Einstein said: &#039;E=MC²&#039;<br>
Albert Einstein said: 'E=MC²'<br>
Albert Einstein said: &#039;E=MC²&#039;

The browser output of the code above will be:
Albert Einstein said: 'E=MC²'
Albert Einstein said: 'E=MC²'
Albert Einstein said: 'E=MC²' 