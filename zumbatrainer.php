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

        <!-- Style For Profile -->
        <style>
            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                max-width: 300px;
                margin: auto;
                text-align: center;
                font-family: arial;
                background: white;
            }

            .title {
                color: grey;
                font-size: 18px;
            }

            button {
                border: none;
                outline: 0;
                display: inline-block;
                padding: 8px;
                color: white;
                background-color: #000;
                text-align: center;
                cursor: pointer;
                width: 100%;
                font-size: 18px;
            }

            a {
                text-decoration: none;
                font-size: 22px;
                color: black;
            }

            button:hover,
            a:hover {
                opacity: 0.7;
            }
        </style>

        <h2 style="text-align:center; color:yellow;">--Zumba Dance Trainer--</h2>

        <div class="card">
            <img src="img/trainer2.jpg" alt="image" style="width:100%">
            <h2>Rita Das</h2>
            <p class="title">Professional Zumba Instructor</p>
            <p class="title">FitnessFirst Club</p>
            <h4>Time Schedule</h4>
            <table border="1">
                <tr>
                    <th>Days</th>
                    <th>Time</th>
                    <th>Availabilty</th>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>6am-8am</td>
                    <td>Available</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>4pm-6pm</td>
                    <td>Available</td>
                </tr>
                <tr>
                    <td>Other Days</td>
                    <td>Not fixed</td>
                    <td>Not Available</td>
                </tr>
            </table>
            <br>
            <h2>User Rating</h2>
            <h5>5 Stars</h5>
            <div class="rating">
            <div class="Skills stars">120</div>
            </div>
            <h5>4 Stars</h5>
            <div class="rating">
            <div class="Skills star">80</div>
            </div>
            <h5>3 Stars</h5>
            <div class="rating">
            <div class="Skills sta">30</div>
            </div>
            <h5>2 Stars</h5>
            <div class="rating">
            <div class="Skills st">10</div>
            </div>
            <h5>1 Star</h5>
            <div class="rating">
            <div class="Skills stt">3</div>
            </div>

            </div>

            <br>
            
        </div>
        <!-- Style For User Rating  -->
        <style>
                .rating{
                    width: 100%;
                    background-color: #ddd;
                }
                .skills{
                    text-align: right;
                    padding-top: 10px;
                    padding-bottom: 10px;
                    color: white;
                }
                .stars{
                    width: 80%; background-color: #04AA6D;
                }
                .star{
                    width: 60%; background-color: #04AA6D;
                }
                .sta{
                    width: 30%; background-color: #04AA6D;
                }
                .st{
                    width: 10%; background-color: #04AA6D;
                }
                .stt{
                    width: 3%; background-color: #04AA6D;
                }
                
            </style>
        
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