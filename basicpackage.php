<?php

include_once './backend/connection.php';


if(isset($_POST['basicregister'])){
     $first_name = $_POST['firstname'];
     $last_name =  $_POST['lastname'];
     $age = $_POST['age'];
     $package = $_POST['package'];
     $trainer = $_POST['trainer'];
     $training = $_POST['training'];
     $date = $_POST['dates'];

    $data = "INSERT INTO `basic_register`(`firstname`, `lastname`, `age`, `package`, `trainer`,`training`, `date`) VALUES ('$first_name','$last_name','$age','$package','$trainer','$training','$date')";
    
    $result = mysqli_query($conn,$data);

    
    
    
    if ($result){
        echo 'basic package registered';
        header("location: login.php?=registered");

    }else{

        echo "error".$data.'<br/>'.mysqli_error($conn);
    }
}
mysqli_close($conn);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fitness First</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/trainer.css">

    <link rel="stylesheet" href="./css/login.css">

    <link rel="stylesheet" href="./css/advance.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>


    <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>
<!-- Style for login form box -->
<style>
    .form-box {
        height: 530px !important;
        margin-bottom: 20px !important;

    }
</style>

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
        <h2>---Basic Subscription Package---</h2>
        <div id="error"></div>
        <form action="basicpackage.php" id="forms-box" method="POST">
            <label for="firstname">First Name</label><br>
            <input type="texts" id="firstname" name="firstname" placeholder="First Name" required><br>

            <label for="lastname">Last Name</label><br>
            <input type="texts" id="lastname" name="lastname" placeholder="Last Name"required><br>

            <label for="age">Age</label><br>
            <input type="texts" id="age" name="age" placeholder="Age"required><br>
            <label for="package">Package Choose</label><br>
            <select id="package" name="package"required>
                <option value="yoga">Yoga</option>
                <option value="zumba-dance">Zumba Dance</option>
                <option value="cardiovascular">Cardiovascular</option>
                <option value="weight-lifting">Weight Lifting</option>
            </select><br>
            <label for="trainer">Trainer</label><br>
            <select id="trainer" name="trainer"required>
                <option value="Miss Jean">Yoga Trainer[Miss Jean]</option>
                <option value="Miss Rita">Zumba Dance Trainer[Miss Rita]</option>
                <option value="Mr.Robert">Cardiovascular Trainer[Mr. Robert]</option>
                <option value="Mr.Kim">Weight Lifting Trainer[Mr.Kim]</option>
            </select><br>
            <label for="training">Training Time</label><br>
            <select id="training" name="training"required>
                <option value="Thursday[5am-6am]">5am-6am[For Yoga]</option>
                <option value="Friday[5pm-6pm]">5pm-6pm[For Yoga]</option>
                <option value="Tuesday[6am-8am]">6am-8am[For Zumba]</option>
                <option value="Wednesday[4pm-6pm]">4pm-6pm[For Zumba]</option>
                <option value="Sunday[7am-8am]">7am-8am[For Cardio]</option>
                <option value="Monday[6pm-7pm]">6pm-7pm[For Cardio]</option>
                <option value="Sunday[7am-8am]">8am-9am[For Weightlifting]</option>
                <option value="Monday[6pm-7pm]">4pm-5pm[For Weightlifting]</option>

            </select><br>
            <label for="date">Select Date to Join:</label><br>
            <input type="date" id="dates" name="dates" style="font-size: 25px;" required>
            <br>
            <button type='submit' name="basicregister" id="basicregister" style="color: blue;">Subscribe</button>

        </form>

        <!-- --------Footer------- -->
        <!------- only for this page important is written, it applies style for only this page----------- -->
        <style>
            .foot {
                width: 100% !important;
                min-height: 100px !important;
            }

            .foot img {
                width: 100px !important;
            }
        </style>
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