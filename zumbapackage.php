<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fitness First</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/trainer.css">

    <link rel="stylesheet" href="css/package.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>


    <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>

<body>

    <section class="header">
        <nav>
            <a href="index.php"><img src="img/logo.png" alt="logo"></a>

            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="index.php">ABOUT</a></li>
                    <li><a href="index.php">PROGRAMS</a></li>
                    <li><a href="index.php">TRAINERS</a></li>
                    <li><a href="index.php">CONTACT</a></li>
                    <li><a href="login.php">SIGN UP/LOGIN</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>
        </nav>


        <section class="gym" id="programs">

            <h1>ZUMBA DANCE PACKAGE</h1>
            <div class="row">
                <section>
                    <div class="container py-5">

                        <!-- Start -->
                        <header class="text-center mb-5 text-white">
                            <div class="row">
                                <div class="col-lg-7 mx-auto">
                                    
                                </div>
                            </div>
                        </header>
                        <!-- END -->

                        <!-- Style for list elements -->
                        <style>
                            .basic{
                                background: black;
                                list-style: none;
                            }
                            .pro{
                                background: green;
                                list-style: none;
                            }
                           
                        </style>

                        <div class="row text-center align-items-end">
                            <!-- Pricing Table-->
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <div class="bg-white p-5 rounded-lg shadow">
                                    <h1 class="h6 text-uppercase font-weight-bold mb-4 basic">Basic</h1>
                                    <h2 class="h1 font-weight-bold basic">$199<span class="text-small font-weight-normal ml-2">/ month</span></h2>

                                    

                                    <ul class="list-unstyled my-5 text-small text-left basic">
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i>Complimentary OnePass
                                        </li>
                                        <li class="mb-3"> 
                                            <i class="fa fa-check mr-2 text-primary"></i>Free Fitness Gear and snacks are included
                                        </li>
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i>Breakfast only
                                        </li>
                                        <li class="mb-3 text-muted">
                                            <i class="fa fa-times mr-2"></i>
                                            <del>Easy Refund</del>
                                        </li>
                                        <li class="mb-3 text-muted">
                                            <i class="fa fa-times mr-2"></i>
                                            <del>Live Classes</del>
                                        </li>
                                        <li class="mb-3 text-muted">
                                            <i class="fa fa-times mr-2"></i>
                                            <del>Hot and Cold shower</del>
                                        </li>
                                        
                                    </ul>
                                    <a href="basicpackage.php" onMouseOver="this.style.color='white'" onmouseout="this.style.color='yellow'" class="btn btn-primary btn-block p-2 shadow rounded-pill" style="color: yellow;">Subscribe</a>
                                </div>
                            </div>
                            <!-- END -->


                            <!-- Pricing Table-->
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <div class="bg-white p-5 rounded-lg shadow">
                                    <h1 class="h6 text-uppercase font-weight-bold mb-4 pro">Premium</h1>
                                    <h2 class="h1 font-weight-bold pro">$399<span class="text-small font-weight-normal ml-2">/ month</span></h2>

                                    

                                    <ul class="list-unstyled my-5 text-small text-left font-weight-normal pro">
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i>Free Fitness Gear
                                        </li>
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i>Next 1month free membershipcard
                                        </li>
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i>Breakfast and lunch included
                                        </li>
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i>Complimentary OnePass
                                        </li>
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i>Fruit juices
                                        </li>
                                        <li class="mb-3">
                                            <i class="fa fa-check mr-2 text-primary"></i>Hot and Cold shower
                                        </li>
                                        
                                    </ul>
                                    <a href="premiumpackage.php" onmouseover="this.style.color='white'" onmouseout="this.style.color='yellow'" class="btn btn-primary btn-block p-2 shadow rounded-pill" style="color: yellow;">Subscribe</a>
                                </div>
                            </div>
                            <!-- END -->


                            

                        </div>
                    </div>
                </section>
            </div>


        </section>


        <!-- --------Footer------- -->
        <div class="foot">

            <img src="img/logo.png" alt="logo">

            <p>&copy Fitness First Gym. All Rights Reserved By Fitness</p>



        </div>


</body>

</html>
<script>
    var navlinks = document.getElementById("navlinks");

    function showmenu() {
        navlinks.style.right = "0";
    }

    function hidemenu() {
        navlinks.style.right = "-200px";
    }
</script>