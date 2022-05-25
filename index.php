<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php
    $number = $_REQUEST["number"];
    $id = "tableNo";
    $class = "table";
    echo "<div class=" . $class . " id=" . $id . ">" . $number . "</div>"
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- php code start -->
    <?php

    function getMaxReviews()
    {
        $con = mysqli_connect("localhost:3306", "kai", "123", "rescustomer");
        if ($con->connect_error) {
            die("connection failed:" . $con->connect_error);
        }
        $sql = "SELECT count(id) from feedback";
        $result = $con->query($sql);
        $totalRows = 0;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $totalRows = $row['count(id)'];
            }
        } else {
            echo "something went wrong";
        }
        return $totalRows;
    }

    function getReviews($id)
    {
        $con = mysqli_connect("localhost:3306", "kai", "123", "rescustomer");
        if ($con->connect_error) {
            die("connection failed:" . $con->connect_error);
        }
        $top = 4;
        $sql = "select * from feedback where id = " . $id;
        $result = $con->query($sql);
        $rating = 5;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card-title'>" . $row['customer_name'] . "</div>";
                echo "<div class='card-subtitle mb-2 text-muted'>" . $row['date'] . "</div>";
                echo "<div>";
                $tempRating = $row['rating'];
                while ($rating != 0) {
                    if ($tempRating != 0) {
                        echo "<span class='fa fa-star checked'></span>";
                        $tempRating--;
                        $rating--;
                        continue;
                    }
                    echo "<span class='fa fa-star'></span>";
                    $rating--;
                }
                echo "</div>";
                echo "<div class='card-text mt-2'>" . $row['feed'] . "</div>";
            }
        } else
            echo "error in db connection";
        $con->close();
    }
    ?>
    <!-- php code ends here -->

    <!-- nav bar -->

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" id='logo' href="#">Ravenwatch Luncheonette</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <?php
                        echo "<a class ='nav-link active' aria-current='page' href='index.php?number=" . $number . "'>Home</a>";
                        ?>
                        <!-- <a class="nav-link active" aria-current="page" href="index.php">Home</a> -->
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- carousel -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="https://images.unsplash.com/photo-1576237934915-c716cf54b24d?ixlib=rb-1.2.1&raw_url=true&q=60&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDZ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://images.unsplash.com/photo-1562514155-444b9a967dfa?ixlib=rb-1.2.1&raw_url=true&q=60&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDR8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1576237680582-75be01432ca6?ixlib=rb-1.2.1&raw_url=true&q=60&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDl8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="d-flex flex-column p-2">
        <h5 class="text-center">Hungry?</h5>
        <?php
        echo "<a class='btn btn-danger' href='indexOther.php?number=" . $number . "'>Order Now</a>";
        ?>
    </div>

    <!-- reviews -->

    <div class="d-flex flex-column m-3">
        <span>Reviews from our satisfied customers</span>
        <div id="carouselExampleDark" class="carousel carousel-dark slide mt-3" data-bs-ride="carousel">
            <!-- slider bottom buttons hidden -->
            <div class="carousel-indicators d-none">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner mt-2">
                <div class="carousel-item active" data-bs-interval="5000">
                    <div class="card bg-light mb-3 p-2">
                        <?php
                        getReviews(rand(1, getMaxReviews()));
                        ?>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <div class="card bg-light mb-3 p-2">
                        <?php
                        getReviews(rand(1, getMaxReviews()));
                        ?>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card bg-light mb-3 p-2">
                        <?php
                        getReviews(rand(1, getMaxReviews()));
                        ?>
                    </div>
                </div>
            </div>
            <!-- buttons hidden -->
            <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="d-flex flex-column card">
        <span class="text-center font-weight-bold" id="heading-cursive">Discover all about</span>
        <span class="text-center font-weight-bold">DINING IN THE DARK</span>

        <span class="text-center font-weight-bold">Best Restaurant In Kuala Lumpur, Malaysia</span>
        <div class="text-center mt-2">Nestled in the heart of Kuala Lumpur’s busy entertainment street, Changkat Bukit Bintang, Dining In The Dark KL is a unique restaurant that promises some very one-of-its-kind dining experience. With the sense of sight taking the back seat, diners are given the opportunity to appreciate their food using all their other senses. The food in this best restaurant in Kuala Lumpur, Malaysia are carefully curated to give diners a fulfilling experience. Great attention is given to the texture, aroma and taste of the food so that diners can explore every aspect of their senses – except for their sight, of course!</div>
    </div>
</body>

</html>