function submitFeedback(tableId) {
    var rating = 0;
    var name = document.getElementById('name').value;
    var feed = document.getElementById('feedback').value;
    for (let i = 5; i >= 0; i--) {
        if (document.getElementById(i).checked) {
            rating = i;
            break;
        }
    }

    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const date = new Date();
    var feedbackData = {
        customerName: name,
        customerFeed: feed,
        customerDate: "" + date.getDate() + " " + months[date.getMonth()] + " " + date.getFullYear(),
        customerRating: rating
    }
    $.ajax({
        url: "submitFeedback.php",
        type: "post",
        data: { feedback: JSON.stringify(feedbackData), sendTable: tableId },
        success: function (res) {
            
        }
    });
}