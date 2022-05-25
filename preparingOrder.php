<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="preparingOrder.css?1">
    <script src="operations.js?2"></script>
    <title>Order Placed!</title>
</head>

<body>
    <?php
    $number = $_REQUEST["number"];
    $id = "tableNo";
    $class = "table";
    echo "<div class=" . $class . " id=" . $id . ">" . $number . "</div>"
    ?>
    <div class="headLine">
        <span>Your food is being prepared.</span>
        <div class="img"></div>
    </div>
    <div class="container-fluid">

        <?php
        echo "<button type='button' onclick='goToHomePage(" . $number . ")' class='btn btn-danger'  style='margin-right: 10px;'>Order Again?</button>";
        echo "<button type='button' onclick='goToGenerateBillPage(" . $number . ")' class='btn btn-danger'>Pay</button>"
        ?>
        
    </div>
</body>

</html>