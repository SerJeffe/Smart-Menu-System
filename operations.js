function incrementQ(id){
    var data = parseInt(document.getElementById(id).innerHTML);
    data = data + 1;
    document.getElementById(id).innerHTML= data;
    calculateTotalPrice("price"+id,"Add");
}

function decrementQ(id){
    var data = parseInt(document.getElementById(id).innerHTML);
    data = data - 1;
    if(data<0)
        document.getElementById(id).innerHTML= 0;
    else{
        document.getElementById(id).innerHTML= data;
        calculateTotalPrice("price"+id,"Sub");
    }
}

function calculateTotalPrice(priceId,cmd){
    var price = parseInt(document.getElementById(priceId).innerHTML);
    var id = "calcPrice";
    var total = parseInt(document.getElementById(id).innerHTML);
    if(cmd=="Add"){
        document.getElementById(id).innerHTML = (total+price);
    }
    else{
        document.getElementById(id).innerHTML = (total-price);
    }
}

function openOrderPlaced(){
    var tableId = parseInt(document.getElementById("tableNo").innerHTML);
    var totalPrice = parseInt(document.getElementById("calcPrice").innerHTML);
    var i = 0;

    var order = [];

    for(i=1;i<=21;i++){
        var quantity = parseInt(document.getElementById(""+i).innerHTML);
        if(quantity!=0){
            var subOrder = {}; 
            subOrder.quantity = quantity;
            subOrder.name = document.getElementById("item"+i).innerHTML;
            subOrder.price = parseInt(document.getElementById("price"+i).innerHTML)*quantity;
            order.push(subOrder);
        }
        else
            continue;
    }

    console.log(order);

    if(totalPrice>0){
        $.ajax({
            url:"orderPlaced.php",
            type:"post",
            data: {sendOrder: JSON.stringify(order),sendTable: tableId},
            success: function(res){
                console.log(res);
                window.open("preparingOrder.php?number="+tableId,"_self");
            }
        });
    }
    else
        alert("Please select atleast one item.");
}

// function checkIfOrderExist(){
//     var tableId = parseInt(document.getElementById("tableNo").innerHTML);
//     $.ajax({
//         url:"checkTableStatus.php",
//         type:"post",
//         data: {sendTable: tableId},
//         success: function(status){
//             console.log(status);
//             if(status==tableId+"yes")
//                 window.open("preparingOrder.html","_self");
//         }
//     });
// }


function displayData(tableNo){
    alert(tableNo);
}




//preparing order operations

function generateBill(tableName){
    $.ajax({
        url:"orderComplete.php",
        type:"post",
        data: {sendTable: tableName},
        success: function(){
            document.getElementById("button-id-"+tableName).value = "Bill Generated..";
        }
    });
}

function goToHomePage(tableId){
    window.open("indexOther.php?number="+tableId,"_self");
}

function goToGenerateBillPage(tableId){
    window.open("payment/generateBill.php?number="+tableId,"_self");
}


//reception operations

function orderComplete(tableNo){
    $.ajax({
        url:"orderComplete.php",
        type:"post",
        data: {sendTable: tableNo},
        success: function(res){
            console.log(res);
        }
    });
}

function checkTable(){
    var i;
    for(i=1;i<=5;i++){
        checkTableAjax(i);
    }
}

function checkTableAjax(input){
    $.ajax({
        url:"checkTableStatus.php",
        type:"post",
        data: {sendTable: input},
        success: function(status){
            console.log(status);
            if(status==input+"yes")
                document.getElementById(input).style.backgroundColor = 'green' ;
        }
    });
}
