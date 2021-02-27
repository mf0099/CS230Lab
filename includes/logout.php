<?php

session_start();
session_unset(); //equivalent to $_SESSION = array()
session_destroy(); //removes all files from the temp directory
header("Location: ../index.php");
exit();
