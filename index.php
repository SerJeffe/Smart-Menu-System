<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css?1">
    <title>FOOD</title>


</head>
<body>
    <?php
    $number = $_REQUEST["number"];
    $id = "tableNo";
    $class = "table";
    echo "<div class=".$class." id=".$id.">".$number."</div>"
    ?>
    <nav id="mainNavbar" class="navbar navbar-dark navbar-expand-md py-0 fixed-top" >
        <a href="#" class="navbar-brand">HOME</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">FOOD</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">MENU</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">ABOUT</a>
                </li>
            </ul>

        </div>

    </nav>
    <section class="spacing" class="container-fluid px-0">
      <div class="row align-items-center">
          <div class="col-lg-6">
              <div id="headingGroup" class="text-white text-center d-none d-lg-block">
                  <h1 class=""><span>J</span>ust like <span>G</span>randma used to make!!!</h1>
                  


              </div>

          </div>
          <div class="col-lg-6">
              <img class="img-fluid" src="https://images.unsplash.com/photo-1486485764572-92b96f21882a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80" alt="">
              
          </div>

      </div>
    </section>
    <section class="spacing" class="container-fluid px-0">
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1">
                <img src="https://5.imimg.com/data5/VG/LB/ID/SELLER-42933644/vegetarian-food-tiffin-service-in-ludhiana-500x500.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 text-center order-1 order-md-2">
              <div class="row justify-content-center">
                  <div class="col-10 col-lg-8">
                    <button type="button" class="btn btn-dark common">
                    <?php echo "<a class='anchor-of-two' href='vegMenu.php?number=".$number."'><span>V</span>EGETARIAN</a>";
                    ?>
                    </button>

                  </div>

              </div>
            </div>

        </div>

    </section>
    <section class="spacing" class="container-fluid px-0">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div id="headingGroup" class="text-white text-center col-10 col-lg-8 d-lg-block">
                    <button type="button" class="btn btn-dark common">
                    <?php echo "<a class='anchor-of-two' href='nonVegMenu.php?number=".$number."'><span>N</span>ON-<span>V</span>EGETARIAN</a>";
                    ?>
                </button>
  
  
                </div>
  
            </div>
            <div class="col-lg-6">
                <img class="img-fluid" src="https://qph.fs.quoracdn.net/main-qimg-5beaed2c2fa62ab9ed2a5086d77ae0e0.webp" alt="">
            </div>
  
        </div>
      </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
    $(function(){
        $(document).scroll(function(){
            var $nav=$("#mainNavbar");
            $nav.toggleClass("scrolled",$(this).scrollTop()>$nav.height());
        })
    })
</script>
</body>
</html>