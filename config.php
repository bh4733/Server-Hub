<?php
/*output buffering. Without output buffering (which is the default), your HTML is sent to the browser in pieces as PHP processes through your script. With output buffering, your HTML is stored in a variable and sent to the browser as one piece at the end of your script, this improves performance.*/
ob_start();
session_start(); // starts a php session which will allow storage and retrieval of data between pages.
//session_destroy();
//below are database constants that will be used in the mysqli_connect function. *Important* Update these to match your current setup on WAMP.
defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "Level_up");
//the variable connection is used to store the result of mysql connect function
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//includes the functions.php script within this script
require_once("functions.php");
