<!--
Programmer Name: Aw Jun Yuan & Kingsley Ng Ti Heng
Program Name:logout.php
Description: Logout logic
Edited/Modified by: Lee Jang Jhin
 -->

<?php
session_start();

// frees all session variables currently registered.
session_unset();

// destroys all of the data associated with the current session
session_destroy();

// session destroy return back to login page
header("Location: index.php");
 ?>
