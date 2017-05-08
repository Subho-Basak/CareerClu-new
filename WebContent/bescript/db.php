<?php

define("HOSTNAME", "localhost");
define("USR", "root");
define("PASSWD", "");
define("DB", "careerclu_db");
define("PORT", 3306);

$db = mysqli_connect(HOSTNAME, USR, PASSWD, DB, PORT);

if(!$db) 
{
    die(mysqli_error($db));
}
?>

