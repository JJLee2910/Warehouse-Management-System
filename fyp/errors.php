<!--
Programmer Name: Meeganathan
Program Name:errors.php
Description: Fetch errors, and prompt error message
Edited/Modified by: Lee Jang Jhin
 -->


<?php

// if $errors array is not empty, the form must have failed one or more validation tests.
// Loop through each and display them on the page for the user
if (!empty($errors))
{
  echo "<div class='error'>Please fix the following errors:\n<ul>";
	foreach ($errors as $error)
  	echo "<li>$error</li>\n";

  	echo "</ul></div>";
}
?>
