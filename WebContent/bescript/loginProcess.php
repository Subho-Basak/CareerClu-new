<?php require 'functions.php'; ?>

<?php

header("Content-Type: text/plain");

if(validateInput($_POST['email']) && validateInput($_POST['passd']))
{
    if($_POST['email'] === "admin@local" && $_POST['passd'] === "admin")
    {
        echo "SUCCESS";
    }
    else
    {
        echo "ERROR";
    }
}

?>
