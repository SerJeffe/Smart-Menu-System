<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="operations.js?2"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="nonVegMenu.css?2">
    <title>Non-Veg Menu</title>
</head>

<body>
<?php
    $number = $_REQUEST["number"];
    $id = "tableNo";
    $class = "table";
    echo "<div class=".$class." id=".$id.">".$number."</div>"
?>
    <div class="topImg">
        <span id="imageSpan">Prosperity in each taste</span>
    </div>
    <div class="breakFast">
        <h3>Breakfast</h3>
        <hr>
        <div class="item">
            <span class="itemName" id="item1">Chicken Tikka</span>
            <span class="priceS">₹</span><span class = "price" id="price1">120</span>
            <input type="button" class="button" onclick="decrementQ('1')" value="-">
            <input type="button" class="button" onclick="incrementQ('1')" value="+">
            <span id="1" class="quantityDisplay">0</span>
        </div>
        <div class="item">
            <span class="itemName" id="item2">Chicken Chili</span>
            <span class="priceS">₹</span><span class = "price" id="price2">125</span>
            <input type="button" class="button" onclick="decrementQ('2')" value="-">
            <input type="button" class="button" onclick="incrementQ('2')" value="+">
            <span id="2" class="quantityDisplay">0</span>
        </div>
        <div class="item">
            <span class="itemName" id="item3">Omelette</span>
            <span class="priceS">₹</span><span class = "price" id="price3">60</span>
            <input type="button" class="button" onclick="decrementQ('3')" value="-">
            <input type="button" class="button" onclick="incrementQ('3')" value="+">
            <span id="3" class="quantityDisplay">0</span>
        </div>
        <div class="item">
            <span class="itemName" id="item4">Chicken Burger</span>
            <span class="priceS">₹</span><span class = "price" id="price4">70</span>
            <input type="button" class="button" onclick="decrementQ('4')" value="-">
            <input type="button" class="button" onclick="incrementQ('4')" value="+">
            <span id="4" class="quantityDisplay">0</span>
        </div>
        <div class="item">
            <span class="itemName" id="item5">Fish Fry</span>
            <span class="priceS">₹</span><span class = "price" id="price5">120</span>
            <input type="button" class="button" onclick="decrementQ('5')" value="-">
            <input type="button" class="button" onclick="incrementQ('5')" value="+">
            <span id="5" class="quantityDisplay">0</span>
        </div>
    </div>
    <div class="mainCourse">
        <h3>Main Course</h3>
        <hr>
        <div class="item">
            <span class="itemName" id="item6">Chicken Curry</span>
            <span class="priceS">₹</span><span class = "price" id="price6">350</span>
            <input type="button" class="button" onclick="decrementQ('6')" value="-">
            <input type="button" class="button" onclick="incrementQ('6')" value="+">
            <span id="6" class="quantityDisplay">0</span>
        </div>
        <div class="item">
            <span class="itemName" id="item7">Mutton Curry</span>
            <span class="priceS">₹</span><span class = "price" id="price7">650</span>
            <input type="button" class="button" onclick="decrementQ('7')" value="-">
            <input type="button" class="button" onclick="incrementQ('7')" value="+">
            <span id="7" class="quantityDisplay">0</span>
        </div>
        <div class="item">
            <span class="itemName" id="item8">Fish Curry</span>
            <span class="priceS">₹</span><span class = "price" id="price8">220</span>
            <input type="button" class="button" onclick="decrementQ('8')" value="-">
            <input type="button" class="button" onclick="incrementQ('8')" value="+">
            <span id="8" class="quantityDisplay">0</span>
        </div>
    </div>
    <div class="mainCourse">
        <h3>Rice</h3>
        <hr>
        <div class="item">
            <span class="itemName" id="item9">Jira Rice</span>
            <span class="priceS">₹</span><span class = "price" id="price9">150</span>
            <input type="button" class="button" onclick="decrementQ('9')" value="-">
            <input type="button" class="button" onclick="incrementQ('9')" value="+">
            <span id="9" class="quantityDisplay">0</span>
        </div>
        <div class="item">
            <span class="itemName" id="item10">Steamed Rice</span>
            <span class="priceS">₹</span><span class = "price" id="price10">120</span>
            <input type="button" class="button" onclick="decrementQ('10')" value="-">
            <input type="button" class="button" onclick="incrementQ('10')" value="+">
            <span id="10" class="quantityDisplay">0</span>
        </div>
        <div class="item">
            <span class="itemName" id="item11">Lemon Rice</span>
            <span class="priceS">₹</span><span class = "price" id="price11">160</span>
            <input type="button" class="button" onclick="decrementQ('11')" value="-">
            <input type="button" class="button" onclick="incrementQ('11')" value="+">
            <span id="11" class="quantityDisplay">0</span>
        </div>
        <div class="item">
            <span class="itemName" id="item12">Chicken Biryani</span>
            <span class="priceS">₹</span><span class = "price" id="price12">200</span>
            <input type="button" class="button" onclick="decrementQ('12')" value="-">
            <input type="button" class="button" onclick="incrementQ('12')" value="+">
            <span id="12" class="quantityDisplay">0</span>
        </div>
    </div>
    <div class="mainCourse">
        <h3>Bread</h3>
        <hr>
        <div class="item">
            <span class="itemName" id="item13">Butter Naan</span>
            <span class="priceS">₹</span><span class = "price" id="price13">50</span>
            <input type="button" class="button" onclick="decrementQ('13')" value="-">
            <input type="button" class="button" onclick="incrementQ('13')" value="+">
            <span id="13" class="quantityDisplay">0</span>
        </div>
        <div class="item">
            <span class="itemName" id="item14">Cheese Naan</span>
            <span class="priceS">₹</span><span class = "price" id="price14">70</span>
            <input type="button" class="button" onclick="decrementQ('14')" value="-">
            <input type="button" class="button" onclick="incrementQ('14')" value="+">
            <span id="14" class="quantityDisplay">0</span>
        </div>
        <div class="item">
            <span class="itemName" id="item15">Tawa Roti</span>
            <span class="priceS">₹</span><span class = "price" id="price15">10</span>
            <input type="button" class="button" onclick="decrementQ('15')" value="-">
            <input type="button" class="button" onclick="incrementQ('15')" value="+">
            <span id="15" class="quantityDisplay">0</span>
        </div>
        <div class="item">
            <span class="itemName" id="item16">Masala Naan</span>
            <span class="priceS">₹</span><span class = "price" id="price16">40</span>
            <input type="button" class="button" onclick="decrementQ('16')" value="-">
            <input type="button" class="button" onclick="incrementQ('16')" value="+">
            <span id="16" class="quantityDisplay">0</span>
        </div>
    </div>
    <div class="desert">
        <h3>Desert</h3>
        <hr>
        <div class="item">
            <span class="itemName" id="item17">Ice Cream</span>
            <span class="priceS">₹</span><span class = "price" id="price17">50</span>
            <input type="button" class="button" onclick="decrementQ('17')" value="-">
            <input type="button" class="button" onclick="incrementQ('17')" value="+">
            <span id="17" class="quantityDisplay">0</span>
        </div>
        <div class="item">
            <span class="itemName" id="item18">Orange Crush</span>
            <span class="priceS">₹</span><span class = "price" id="price18">150</span>
            <input type="button" class="button" onclick="decrementQ('18')" value="-">
            <input type="button" class="button" onclick="incrementQ('18')" value="+">
            <span id="18" class="quantityDisplay">0</span>
        </div>
        <div class="item">
            <span class="itemName" id="item19">Chocolate Roll</span>
            <span class="priceS">₹</span><span class = "price" id="price19">20</span>
            <input type="button" class="button" onclick="decrementQ('19')" value="-">
            <input type="button" class="button" onclick="incrementQ('19')" value="+">
            <span id="19" class="quantityDisplay">0</span>
        </div>
        <div class="item">
            <span class="itemName" id="item20">Vanilla Cake</span>
            <span class="priceS">₹</span><span class = "price" id="price20">200</span>
            <input type="button" class="button" onclick="decrementQ('20')" value="-">
            <input type="button" class="button" onclick="incrementQ('20')" value="+">
            <span id="20" class="quantityDisplay">0</span>
        </div>
        <div class="item">
            <span class="itemName" id="item21">Mango Mousse</span>
            <span class="priceS">₹</span><span class = "price" id="price21">70</span>
            <input type="button" class="button" onclick="decrementQ('21')" value="-">
            <input type="button" class="button" onclick="incrementQ('21')" value="+">
            <span id="21" class="quantityDisplay">0</span>
        </div>
    </div>
    <div class="sendOrder">
        <span class="totalPrice" id = "calcPrice">0</span>
        <input type="button" class ="buttonSend" onclick="openOrderPlaced()" value="Place Order">
    </div>

</body>
</html>