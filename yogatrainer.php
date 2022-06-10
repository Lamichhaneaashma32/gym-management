<?php
                    include 'backend/connection.php';
                    $id=$_GET['id'];
                    $query = "select * from trainer where id=".$id;
                    $countQuery = "select count(*) as count from user_feedback where trainer_id=".$id;
                    $ratingSumQuery = "select sum(rating) as ratingSum from user_feedback where trainer_id=".$id;
                    
                   
                    $result = mysqli_query($conn, $query);
                    $count = mysqli_query($conn, $countQuery);
                    $ratingSum = mysqli_query($conn, $ratingSumQuery);
                    
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

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

        <h2 style="text-align:center; color:yellow;">--Yoga Trainer--</h2>
        <?php foreach ($result as $row) {?>
        <div class="card">
            <img src="img/pro_trainer.jpg" alt="image" style="width:100%">
            <h2><?php echo $row['name']; ?></h2>
            <p class="title">GYM TRAINER</p>
            <p class="title">FitnessFirst Club</p>
            <!-- <h4>Time Schedule</h4>
            <table border="1">
                <tr>
                    <th>Days</th>
                    <th>Time</th>
                    <th>Availabilty</th>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>5am-6am</td>
                    <td>Available</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>5pm-6pm</td>
                    <td>Available</td>
                </tr>
                <tr>
                    <td>Other Days</td>
                    <td>Not fixed</td>
                    <td>Not Available</td>
                </tr>
            </table> -->
            <br>
            <!-- <h2>User Rating</h2>
            <h5>5 Stars</h5>
            <div class="rating">
            <div class="Skills stars">150</div>
            </div>
            <h5>4 Stars</h5>
            <div class="rating">
            <div class="Skills star">100</div>
            </div>
            <h5>3 Stars</h5>
            <div class="rating">
            <div class="Skills sta">70</div>
            </div>
            <h5>2 Stars</h5>
            <div class="rating">
            <div class="Skills st">20</div>
            </div>
            <h5>1 Star</h5>
            <div class="rating">
            <div class="Skills stt">1</div>
            </div> -->
            
            <h2>User Rating <?php $data1 =  $count->fetch_assoc(); 
            $data2 =  $ratingSum->fetch_assoc(); 
            if($data2['ratingSum']==0 || $data1['count']==0)
                    {
                        $data2['ratingSum']=1;
                        $data1['count']=1;
                    }
            $data3 =  $data2['ratingSum']/$data1['count'];
            
            echo $data3;
            
            
            ?></h2>
            
            </div>
            <?php } ?>

            <br>
            <!--Style For User Rating -->
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
                    width: 90%; background-color: #04AA6D;
                }
                .star{
                    width: 70%; background-color: #04AA6D;
                }
                .sta{
                    width: 40%; background-color: #04AA6D;
                }
                .st{
                    width: 20%; background-color: #04AA6D;
                }
                .stt{
                    width: 1%; background-color: #04AA6D;
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>