<?php
    $con = mysqli_connect("localhost:3306","kai","123","rescustomer");
    if($con->connect_error){
        die("connection failed:".$con->connect_error);
    }
    $table = $_POST['sendTable'];
    $feedback = json_decode($_POST['feedback'],true);
    $sql = "insert into feedback (customer_name,feed,date,rating) values('".$feedback['customerName']."','".$feedback['customerFeed']."','".$feedback['customerDate']."',".$feedback["customerRating"].")";
    $result = $con->query($sql);
    $con-> close();
    echo "<script>window.open('../index.php?number='+".$table.", '_self')</script>";
?>