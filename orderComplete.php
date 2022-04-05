<?php
    $con = mysqli_connect("localhost:3306","kai","123","rescustomer");
    if($con->connect_error){
        die("connection failed:".$con->connect_error);
    }

    $table = $_POST['sendTable'];
    echo $table;
    $truncate = "truncate table".$table;
    $con->query($truncate);
    $update = "update table_status set status = 0 where tableName = 'table".$table."'";
    $con->query($update);
    
    $con-> close();
?>