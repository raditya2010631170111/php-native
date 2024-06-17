<?php

// session_start();
// session_unset("user");
// header("Location: index.php");

session_start();
unset($_SESSION["user"]);
header("Location: index.php");
exit();
?>
