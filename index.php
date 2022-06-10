


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
                    <li><a href="">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#programs">PROGRAMS</a></li>
                    <li><a href="#trainers">TRAINERS</a></li>
                    <li><a href="#contactid">CONTACT</a></li>
                    <li><a href="login.php">SIGN UP/LOGIN</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>
        </nav>

        <div class="text-box">

            <h1>A PERFECT HEALTH CLUB</h1>

            <p>¨Exercise is king. Nutrition is queen. ¨<br>—Put them together and you've got a kingdom—</p>
            <a href="login.php" class="submit-btn">JOIN US</a>

        </div>

    </section>


    <!-- --------Programs we offer------- -->
    <style>
        #more {
            display: none;
        }

        #more1 {
            display: none;
        }

        #more2 {
            display: none;
        }
    </style>
    <section class="program" id="about">

        <h1>ABOUT</h1>
        <p>Fitness First which is located at Dhunga-adda, Chandragiri which
            was established back in 2072 and has been providing fitness training
            to different age groups.It was opened with the aim of providing health
            benefits and helping the individual to improve their health.
            he Pump specializes in Calisthenics and functional fitness and has facilities ofweight trainings,
            mobility training, kickboxing, and other traditional fitness regimes.
            We believe in promoting a healthy lifestyle though well planned workouts,
            lots of encouragement, and positive vibes, which will make your journey
            with us a fun and productive one. “It is not just looking good but feeling good.
            We are trying to promote a healthy lifestyle and the idea that being
            fit is not just about aesthetics but also living an active life while enjoying it to the fullest.</p>

        <div class="row">
            <div class="program-col">
                <h3>Yoga</h3>
                <p>Fitness first gym is one of the pioneer
                    gym which provides yoga program in Nepal
                    with its outstanding performance<span id="dots">...</span><span id="more"> and spiritual life-changing environment to
                        offer all the yoga aspirants from around the world. As a true
                        trail-blazing fitness club in the field of yoga in Nepal,
                        It offers various courses ranging from beginners level to the
                        advanced level yoga Teacher Training and retreat courses.</p>
                <button onclick="myFunction()" id="myBtn1">Learn more</button>
            </div>


            <div class="program-col">
                <h3>Zumba Dance</h3>
                <p>Zumba is a fitness program that involves cardio and Latin-inspired dance.
                    You may be able to burn between 300 and 900 calories during one hour of
                    mid- to high-intensity Zumba. Doing<span id="dots">...</span><span id="more1"> Zumba two or three times a week,
                        combined with weekly strength training sessions and a balanced diet,
                        may help you meet your weight loss goals. In our fitness first gym
                        we provide zumba dance as well.</p>
                <button onclick="myFunct()" id="myBtn2">Learn more</button>
            </div>
            <div class="program-col">
                <h3>Cardiovascular training</h3>
                <p>Cardiovascular training (CV) is a type of exercise regimen
                    that focuses on working the heart and lungs. Cardiovascular training
                    refers to muscle work that<span id="dots">...</span><span id="more2"> causes the body to consume extra oxygen to
                        fuel the exercise movements.
                        These types of exercises are sometimes called aerobic, meaning "with oxygen."
                        Fitness fit provides proper equipment for Cardiovascular training and proper
                        trainer to give the training of this exercise.</p>
                <button onclick="myFun()" id="myBtn3">Learn more</button>
            </div>
        </div>

    </section>

    <!-- ----------------- Programs we offer------------------ -->

    <section class="gym" id="programs">

        <h1>PROGRAMS WE OFFER</h1>
        <p>Fitness First aims at becoming one of the most preferred gym in Nepal. </p>


        <div class="row">

            <div class="gym-col">

                <img src="img/yoga.jpg" alt="image">
                <div class="layer">
                    <h4>Yoga</h4>
                    <a href="moreprograms.php">view more</a>
                </div>

            </div>

            <div class="gym-col">

                <img src="img/zumba.jpg" alt="image">
                <div class="layer">
                    <h4>Zumba Dance</h4>
                    <a href="moreprograms.php">view more</a>
                </div>

            </div>

            <div class="gym-col">

                <img src="img/cardio.jpg" alt="image">
                <div class="layer">
                    <h4>Cardiovascular Training</h4>
                    <a href="moreprograms.php">view more</a>
                </div>

            </div>

        </div>

    </section>

    <section class="trainer" id="trainers">


        <!-- Style for Profile  -->
        <style>
            .train{
                border: 2px solid black;
                
                border-bottom: 2px solid skyblue;
                border-left: 2px solid red;
                border-right: 2px solid white;
                color: white;
            }
            .train:hover{
                font-size: large;
                font-weight: bold;
                color: yellow;
            }
        </style>
        
        <h1>Our Trainers</h1>
        <p>We provide professional trainers for you.</p>
        <div class='container'>
        <div class="row">

        <?php
                    include 'backend/connection.php';

                    $query = "select * from trainer";

                    $result = mysqli_query($conn, $query);

                    while ($res = mysqli_fetch_array($result)) {


                    ?>


            <div class="col-sm">
                <!--<img src="img/pro_trainer.jpg" alt="image"><br>-->
                <a href="yogatrainer.php?id=<?php echo $res['id']; ?>" class="train">View Profile</a>
                <h4><?php echo $res['name']; ?></h4>

            </div>
            <?php
                    }

                    ?>

            <!-- <div class="trainer-col">
                <img src="img/trainer2.jpg" alt="image"> <br>
                <a href="zumbatrainer.php" class="train">View Profile</a>
                <h4>Zumba Dance Trainer[Miss Rita]</h4>

            </div>

            <div class="trainer-col">
                <img src="img/cardiovascular.jpg" alt="image"> <br>
                <a href="cardiotrainer.php" class="train">View Profile</a>
                <h4>Cardiovascular Trainer[Mr. Robert]</h4>

            </div> -->

        </div>
                </div>

    </section>
    <div class="row">
        
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
</div>
    <!-- Style for Contact achor tag -->
    <style>
        .contact-img a {
            color: white;
        }
    </style>

    <section class="contact" id="contactid">
        <h1>CONTACT US</h1>
        <div class="contact-img">

            <img src="img/logo.png" alt="logo">
            <p>Dhunga-adda, Chandragiri</p>
            <a href="tel:+0123456780 ">+0123456780</a> /<a href="tel:+09876543210"> +09876543210</a> <br>
            <a href="mailto:aashmalamichhane@gmail.com">aashmalamichhane@gmail.com</a>

        </div>
        <br>
        <div class="icons">
            <a href="#"><i class="fa fa-facebook"></i> </a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
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

    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn1");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Learn more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Learn less";
            moreText.style.display = "inline";
        }
    }

    function myFunct() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more1");
        var btnText = document.getElementById("myBtn2");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Learn more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Learn less";
            moreText.style.display = "inline";
        }
    }

    function myFun() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more2");
        var btnText = document.getElementById("myBtn3");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Learn more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Learn less";
            moreText.style.display = "inline";
        }
    }
</script>