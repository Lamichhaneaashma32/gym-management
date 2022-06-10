<?php

include("./backend/connection.php");
session_start();


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

    <link rel="stylesheet" href="css/login.css">

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
        <div id="error"></div>
        
        
        <div class="login-form">
            <h2>Admin Login</h2>

            <form method="POST">
                <div class="input-field">
                    <!-- <i class="fas fa-user"></i> -->
                    <input type="text" id="AdminName" value="" placeholder="Admin Name" name="AdminName">
                    
                   

                </div>
                <div class="input-field">
                    <!-- <i class="fas fa-lock"></i> -->
                    <input type="password" id="AdminPassword" value="" placeholder="Password" name="AdminPassword">

               
                </div>

                <button type="submit" name="signin">Sign in</button>

                <div class="portal">
                    <a href="login.php" class="member">Log-in as member ?</a>
                </div>
                
            </form>
        </div>
        <br>
    <!-- --------Footer------- -->
    <div class="foot">
       
        <img src="img/logo.png" alt="logo">

        <p>&copy Fitness First Gym. All Rights Reserved By Fitness</p>



    </div>

    <?php
        $username = $password = '';
        $errors = array('AdminName'=>'','AdminPassword'=>'');
        if (isset($_POST['signin'])) {
            $username = $_POST['AdminName'];
            $password = $_POST['AdminPassword'];
        
            $query = "SELECT * FROM admin WHERE Admin_name = '$username' && Admin_password = '$password' LIMIT 1 ";
            $result = mysqli_query($conn, $query);
            $count = mysqli_num_rows($result);
            if($count>0)
            {
                // echo "login Successful";
                session_start();
                $_SESSION['AdminLoginId'] =  $username;
                header("location:./backend/dashboard.php");
            }else if($username==null||$username==""){
                echo "<script>alert('Please Enter Admin Name!!')</script>";
            }else if($password==null||$password==""){
                echo "<script>alert('Password field is Empty!!')</script>";
            }
            else{
                echo "<script>alert('Inncorrect Password')</script>";
            }
            
            mysqli_close($conn);
           
        }
        
    ?>


</body>

</html>
<script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');

        function register() {
            x.style.left = '-400px';
            y.style.left = '50px';
            z.style.left = '110px';
        }

        function login() {
            x.style.left = '50px';
            y.style.left = '450px';
            z.style.left = '0px';
        }
    </script>
    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
<script>
    var navlinks = document.getElementById("navlinks");

    function showmenu() {
        navlinks.style.right = "0";
    }

    function hidemenu() {
        navlinks.style.right = "-200px";
    }


</script>

