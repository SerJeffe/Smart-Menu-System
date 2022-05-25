<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="generateBill.css?2">
    <title>Bill</title>
</head>

<body>
    <?php
    $grandTotal = 0;
    $number = $_REQUEST["number"];
    $id = "tableNo";
    $class = "tableID";
    echo "<div class=" . $class . " id=" . $id . ">" . $number . "</div>";

    function getData($tableName)
    {
        $con = mysqli_connect("localhost:3306", "kai", "123", "rescustomer");
        $total = 0;
        // $orderComplete = "orderComplete(" . $tableName . ")";
        if ($con->connect_error) {
            die("connection failed:" . $con->connect_error);
        }
        $sql = "select status from table_status where tableName = 'table" . $tableName . "' and status = 1";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            echo "<ul class='list-group list-group-flush'>";

            $getTableData = "select * from table" . $tableName;
            $result = $con->query($getTableData);
            if (!empty($result) && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li class='list-group-item'>" . $row["quantity"] . "x  " . $row["item"] . "<div class='price-box'> ₹" . $row["price"] . "</div></li>";
                    $total = $total + $row["price"];
                }
                $taxes = 0.05 * $total;
                global $grandTotal;
                $grandTotal = $total + $taxes;
                echo "</ul>";

                echo "
                <div class='amount-div'>
                   
                <div class='card p-2'>
                    <span class='card-text'>Item Total: <p class='price-box amount'>₹" . $total . "</p></span>
                    <span class='card-text'> Taxes & charges: <p class='price-box amount'>₹" . $taxes . "</p></span>
                    <span class='card-text amount' id='grand-total'> Grand Total <p class='price-box'>₹" . $grandTotal . "<p></span>
                </div>
                </div>
                ";
            } else {
                echo "2";
            }
        } else
            echo "kai! im hungry :(";
        $con->close();
    }
    ?>
    <div class="container-fluid mt-3">
        <h4>Order Summary</h4>
        <?php
        getData($number);
        ?>
    </div>

    <button id="rzp-button1" class="btn btn-danger mt-2 mb-3">Pay</button>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "rzp_test_sandWO7BwJqlGU", // Enter the Key ID generated from the Dashboard
            "amount": '<?php echo $grandTotal * 100; ?>', // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "Acme Corp",
            "description": "Restaurant Payment",
            "image": "https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80",
            "handler": function(response) {
                console.log(response);
                <?php
                echo "window.open('./feedback.php?number=" . $number . "', '_self');";
                ?>
            },
            "theme": {
                "color": "#f5d9d5"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function(response) {
            console.log(response);
            alert("Order Unsuccessful");
            <?php
            echo "window.open('../preparingOrder.php?number=" . $number . "', '_self');";
            ?>
        });
        document.getElementById('rzp-button1').onclick = function(e) {
            rzp1.open();
            e.preventDefault();
        }
    </script>

</body>

</html>