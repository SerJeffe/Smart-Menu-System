<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="preparingOrder.css?2">
    <title>Order Placed!</title>
</head>
<body>
    <?php
    $number = $_REQUEST["number"];
    $id = "tableNo";
    $class = "table";
    echo "<div class=".$class." id=".$id.">".$number."</div>"
    ?>
    <div class="headLine">
        <span>Your food is being prepared.</span>
        <div class="img"></div>
    </div>
    <?php
        echo "<a class= 'btn' href='index.php?number=".$number."'>Home Page</a>";
    ?>
</body>
</html>