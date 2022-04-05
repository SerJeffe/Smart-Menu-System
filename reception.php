<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5" >
    <script src="operations.js?2"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="reception.css">
    <title>Reception</title>
</head>
<body onload="checkTable()">

<?php
    
    function getData($tableName){
        $con = mysqli_connect("localhost:3306","kai","123","rescustomer");
        $total = 0;
        $orderComplete = "orderComplete(".$tableName.")";
        if($con->connect_error){
        die("connection failed:".$con->connect_error);
        }
        $sql = "select status from table_status where tableName = 'table".$tableName."' and status = 1";
        $result = $con->query($sql);
        if($result-> num_rows>0){
            echo "<span class='tableName'>Table ".$tableName.":</span>";
            echo "<table>
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>";

            $getTableData = "select * from table".$tableName;
            $result = $con->query($getTableData);
            if (!empty($result) && $result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                echo "<tr><td>".$row["item"]."</td><td>".$row["quantity"]."</td><td>".$row["price"]."</td>";
                $total = $total + $row["price"];
                }
                echo "</table>";
                
                echo "<div class = 'totalAmount'>Total Amount: ₹".$total."</div>";
                echo "<input type='button' class='orderComBtn' onclick=".$orderComplete." value='Order Complete'>";
            }
            else{
                echo "2";
            }
        }
        else
            echo "";
        $con-> close();
    }
?>
    <div class="cusContainer">
        <div class="customerTable">
            <input type="button" class="customerTableText" id="1" value="Table 1">
        </div>
        <div class="customerTable">
            <input type="button" class="customerTableText" id="2" value="Table 2">
        </div>
        <div class="customerTable">
            <input type="button" class="customerTableText" id="3" value="Table 3">
        </div>
        <div class="customerTable">
            <input type="button" class="customerTableText" id="4" value="Table 4">
        </div>
        <div class="customerTable">
            <input type="button" class="customerTableText" id="5" value="Table 5">
        </div>
    </div>
    <div class="displayData">
        <div class="displayMenuInTable">
            <?php
                getData(1);
            ?>
        </div>
        <div class="displayMenuInTable">
            <?php
                getData(2);
            ?>
        </div>
        <div class="displayMenuInTable">
            <?php
                getData(3);
            ?>
        </div>
        <div class="displayMenuInTable">
            <?php
                getData(4);
            ?>
        </div>
        <div class="displayMenuInTable">
            <?php
                getData(5);
            ?>
        </div>
    </div>
</body>
</html>