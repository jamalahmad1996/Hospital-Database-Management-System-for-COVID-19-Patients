<?php

/*

CONNECT-DB.PHP

Allows PHP to connect to your database

*/



// Database Variables (edit with your own server information)

$server = 'localhost';

$user = 'root';

$pass = 'jamal96;';

$db = 'covid_tracker';


// Connect to Database

$conn = new mysqli($server, $user, $pass, $db) or die ('Could not connect to server ... \n'. mysql_error ());

?>