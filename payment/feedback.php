<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="feedback.css">
    <script src="feedbackOperations.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <?php
    $number = $_REQUEST["number"];
    $id = "tableNo";
    $class = "tableID";
    echo "<div class=" . $class . " id=" . $id . ">" . $number . "</div>";
    ?>

    <!-- nav bar starts here -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" id='logo' href="#">Ravenwatch Luncheonette</a>
        </div>
    </nav>
    <!-- nav bar ends here -->

    <div class="d-flex flex-column mt-5 p-3">
        <span class="text-center">We would like your feedback to improve our restaurant</span>
        <span class="text-center mt-4">What is your opinion of our service?</span>

        <!-- rating system -->

        <div class="container d-flex justify-content-center">
            <div class="rate text-white mt-3">
                <div class="rating">
                    <input type="radio" name="rating" value="5" id="5">
                    <label for="5">☆</label>
                    <input type="radio" name="rating" value="4" id="4">
                    <label for="4">☆</label>
                    <input type="radio" name="rating" value="3" id="3">
                    <label for="3">☆</label>
                    <input type="radio" name="rating" value="2" id="2">
                    <label for="2">☆</label>
                    <input type="radio" name="rating" value="1" id="1">
                    <label for="1">☆</label>
                </div>
            </div>
        </div>
    </div>


    <hr class="mt-3">


    <div class="d-flex flex-column p-3">
        <form action="">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Please enter your name">
                <label for="feedback">Please share your feedback below</label>
                <textarea class="form-control mt-2" id="feedback" rows="4"></textarea>
                <?php
                echo "<button class='btn btn-danger mt-2' onclick='submitFeedback(".$number.")'>Submit</button>";
                ?>
            </div>
        </form>
    </div>
</body>

</html>