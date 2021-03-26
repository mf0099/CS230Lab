<?php

$servename = "localhost";
$DBuname = "phpmyadmin";
$DBPass = "cs230lab";
$DBname = "CS230";

$conn = mysqli_connect($servename, $DBuname, $DBPass, $DBname);

if (!$conn) {
    die("Connection failed...".mysqli_connect_error());
    
}

