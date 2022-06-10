<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fitness First</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/trainer.css">

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

        <h1>PROGRAMS WE OFFER</h1>
        <p>Fitness First aims at becoming one of the most preferred gym in Nepal. </p>


        <div class="row">

            <div class="gym-col">

                <img src="img/yoga.jpg" alt="image">
                <div class="layer">
                    <h4>Yoga</h4>
                    <a href="yogapackage.php">VIEW PACKAGE</a>
                </div>

            </div>

            <div class="gym-col">

                <img src="img/zumba.jpg" alt="image">
                <div class="layer">
                    <h4>Zumba Dance</h4>
                    <a href="zumbapackage.php">VIEW PACKAGE</a>
                </div>

            </div>

            <div class="gym-col">

                <img src="img/cardio.jpg" alt="image">
                <div class="layer">
                    <h4>Cardiovascular Training</h4>
                    <a href="cardiopackage.php">VIEW PACKAGE</a>
                </div>

            </div>
            <div class="gym-col">

                <img src="img/weight.jpg" alt="image">
                <div class="layer">
                    <h4>Weight Lifting</h4>
                    <a href="weightlifting.php">VIEW PACKAGE</a>
                </div>

            </div>
            

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