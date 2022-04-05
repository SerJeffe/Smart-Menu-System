<?php
    $con = mysqli_connect("localhost:3306","kai","123","rescustomer");
    if($con->connect_error){
        die("connection failed:".$con->connect_error);
    }

    $table = $_POST['sendTable'];
    echo $table;
    $sql = "select status from table_status where tableName = 'table".$table."' and status = 1";
    $result = $con->query($sql);
    if($result-> num_rows>0){
        echo "yes";
    }
    $con-> close();
?>