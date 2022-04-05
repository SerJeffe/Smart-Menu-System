<?php
    $con = mysqli_connect("localhost:3306","kai","123","rescustomer");
    if($con->connect_error){
        die("connection failed:".$con->connect_error);
    }

    $table = $_POST['sendTable'];
    $order = json_decode($_POST['sendOrder'],true);
    $i=0;
    foreach($order as $o){
        $sql = "insert into table".$table." values('".$o['name']."',".$o['quantity'].",".$o['price'].",".$i++.")";
        $result = $con->query($sql);
    }
    $sql = "update table_status set status=1 where tableName='table".$table."'";
    $result = $con->query($sql);
    $con-> close();
?>