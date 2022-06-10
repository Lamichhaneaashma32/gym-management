<?php

include_once './backend/connection.php';


if(isset($_POST['advanceregister'])){
     $name = $_POST['name'];
     $username =  $_POST['username'];
     $email=  $_POST['email'];
     $password = $_POST['password'];
     $pass_code = password_hash($password,PASSWORD_DEFAULT);
     $age = $_POST['age'];
     $contact = $_POST['contact'];
     $address = $_POST['address'];
     $package = $_POST['package'];
     $program = $_POST['program'];
     $trainer = $_POST['trainer'];
  
     $date = $_POST['dates'];
$status="UNVERIFIED";
    $data = "INSERT INTO `advance_register`(`name`, `username`,`email`,`password`, `age`,`contact`,`address`,`package`, `program`, `trainer`, `date`,`status`) VALUES ('$name','$username','$email','$pass_code','$age','$contact','$address','$package','$program','$trainer','$date','$status')";
    
    $result = mysqli_query($conn,$data);

    
    
    
    if ($result){
        echo 'advance registered';
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
<script>
    function GEEKFORGEEKS()                                    
{ 
    var name = document.forms["RegForm"]["name"];               
    var username = document.forms["RegForm"]["username"];    
    var email = document.forms["RegForm"]["email"];  
    var password =  document.forms["RegForm"]["password"];  
    var contact = document.forms["RegForm"]["contact"];  
    var address = document.forms["RegForm"]["address"];  
    var age = document.forms["RegForm"]["age"];  
    
    if (name.value == "" ||  name.value.length<3)                                  
    { 
        window.alert("Please enter your full name."); 
        name.focus(); 
        return false; 
    } 
   
    if (username.value.length<6)                               
    { 
        window.alert("Please enter username  of length greater than 6"); 
        username.focus(); 
        return false; 
    } 
       
   
    if (password.value.length< 6)                           
    { 
        window.alert("Please enter  password of length greater than 6"); 
        password.focus(); 
        return false; 
    } 
    if (contact.value == "" || contact.value.length<10)                           
    { 
        window.alert("Please enter valid number"); 
        contact.focus(); 
        return false; 
    } 
    if (address.value == "" )                           
    { 
        window.alert("Please enter your address"); 
        address.focus(); 
        return false; 
    } 
   
    return true; 
}</script> 




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
        <h2>---Advance Registration System---</h2>
        <div id="error"></div>
        <form action="advance.php" id="forms-box" method="POST" name="RegForm" onsubmit="return GEEKFORGEEKS()">
            <label for="firstname"> Name</label><br>
            <input type="texts" id="firstname" name="name" placeholder=" Name" required><br>

            
            <label for="firstname">User  Name</label><br>
            <input type="texts" id="firstname" name="username" placeholder="User Name" required><br>
            <label for="firstname">Email</label><br>
            <input style="width:27%; height:45px; border-radius:5px" type="email" id="firstname" name="email" placeholder="Email" required><br>
            <label for="lastname">Password</label><br>
            <input style="width:27%; height:45px; border-radius:5px" type="password" id="password" name="password" placeholder="Password"required><br>
             
            <label for="firstname">Contact number</label><br>
            <input  type="texts" name="contact" placeholder="Contact number" required><br>

            <label for="firstname">Address</label><br>
            <input type="texts"  name="address" placeholder="Address" required><br>

            <label for="age">Age</label><br>
            <input style="width:27%; height:45px; border-radius:5px" type="number" id="age" name="age" placeholder="Age"required><br>
            <label for="package">Basic/Premium Package</label><br>
            <select id="package" name="package"required>
                <option value="basic">Basic</option>
                <option value="premium">Premium</option>
            </select><br>
            <label for="program">Program Choose</label><br>
            <select id="program" name="program"required>
                <option value="yoga">Yoga</option>
                <option value="zumba-dance">Zumba Dance</option>
                <option value="cardiovascular">Cardiovascular</option>
                <option value="weight-lifting">Weight Lifting</option>
            </select><br>
            <label for="trainer">Trainer</label><br>
            <select id="trainer" name="trainer"required>
            <?php
                    include 'backend/connection.php';

                    $query = "select * from trainer";

                    $result = mysqli_query($conn, $query);

                    while ($res = mysqli_fetch_array($result)) {


                    ?>
                        <option value=" <?php echo $res['name']; ?>
                       ( <?php echo $res['time']; ?>)
                       [ <?php echo $res['program']; ?>]">
                        <?php echo $res['name']; ?>
                       ( <?php echo $res['time']; ?>)
                       [ <?php echo $res['program']; ?>]
                          
                    </option>
                        <?php
                    }

                    ?> 
            </select><br>
            
            <label for="date">Select Date to Join:</label><br>
            <input type="date" id="dates" name="dates" style="font-size: 25px;" required>
            <br>
            <button type='submit' name="advanceregister" id="advanceregister" style="color: blue;">Submit registration</button>

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