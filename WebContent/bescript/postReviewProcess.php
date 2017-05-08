<?php 
    include 'db.php'; 
    include 'functions.php';
    
    if(validateInput($_POST['name']) && validateInput($_POST['dept']) && validateInput($_POST['review']))
    {
        $name = $_POST['name'];
        $dept = $_POST['dept'];
        $review = $_POST['review'];
        
        $query = "insert into review(fullname, department, comment) values (";
        $query .= "'" . $name . "',";
        $query .= "'" . $dept . "',";
        $query .= "'" . $review . "')";
        
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

