<?php 
    include 'db.php'; 
    include 'functions.php';
    
    if(validateInput($_POST['fnm']) && validateInput($_POST['lnm']) && validateInput($_POST['phn']) && validateInput($_POST['mail']) && validateInput($_POST['state']) && validateInput($_POST['qry']))
    {
        $fnm = $_POST['fnm'];
        $lnm = $_POST['lnm'];
        $phn = $_POST['phn'];
        $mail = $_POST['mail'];
        $state = $_POST['state'];
        $qry = $_POST['qry'];
        
        $query = "insert into query(fname, lname, mobile, emailid, state, query, document) values (";
        $query .= "'" . $fnm . "',";
        $query .= "'" . $phn . "',";
        $query .= "'" . $lnm . "',";
        $query .= "'" . $mail . "',";
        $query .= "'" . $state . "',";
        $query .= "'" . $qry . "',";
        $query .= "''" . ")";
        
        if(mysqli_query($db, $query))
        {
            echo "SUCCESS";
        }
        else
        {
            echo "ERROR";
        }
    }
    
?>

