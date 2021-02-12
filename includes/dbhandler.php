<?php

$servename = "localhost";
$DBuname = "phpmyadmin";
$DBPass = "Frannie2013";
$DBname = "CS230";

$conn = mysqli_connect($servename, $DBuname, $DBPass, $DBname);

if (!$conn) {
    die("Connection failed...".mysqli_connect_error());
    
}

