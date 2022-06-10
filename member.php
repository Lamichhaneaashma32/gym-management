<?php
require './backend/connection.php';
session_start();
if (($_SESSION["status"] != true)) {
    header("location:./login.php");
}
if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $trainer_id = $_POST['trainer_id'];

    $query = "INSERT INTO user_feedback(`firstname`, `lastname`,`email`, `rating`,`trainer_id`) VALUES ('$fname','$lname','$email','$rating','$trainer_id')";
    echo '<script>alert("FeedBack Successfully Inserted")</script>';
    $result = mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="./css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="images/fav.jpg">

    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/jquery.min.js"></script>

    <style>
        
        .welcome {
            color: white;
            font-family: poppins;
            /* background-color: #6495ed; */
            text-align: center;
            padding: 50px;
        }

        #logout {
            float: right;
            padding-top: 5px;

        }

        .logo {
            padding-top: 5px;
            width: 100px;
        }
        
    </style>

</head>


<body>
    <section class="header">
        <img class="logo" src="img/logo.png" alt="logo">
        <div class="Logout" id="logout">
            <form method="POST">
                <button class="submit-btn" name="Logout">Logout</button>
            </form>

        </div>


        <div class="welcome">
            <h1 class="wel"><?php echo "Welcome " . $_SESSION['useremail']; ?></h1>
        </div>
        <div class="col-lg-4 m-auto">
            <form method="POST">
                <br><br>
                <div class="card">
                    <div class="card-header bg-dark">
                        <h1 class="text-white text-center">Give Your FeedBack</h1>
                    </div>
                    <br>

                    <label>First Name:</label>
                    <input type="text" name="firstname" class="form-control" required>
                    <label>Last Name:</label>
                    <input type="text" name="lastname" class="form-control" required>
                    <label>Email:</label>
                    <input type="text" name="email" value="<?php echo $_SESSION['useremail']; ?>" class="form-control" readonly>
                    <!-- <label>Equipment:</label>
                    <select id="equipment" name="equipment">
                        <option value="Excellent">Excellent</option>
                        <option value="Average">Average</option>
                        <option value="Bad">Bad</option>
                        
                    </select>
                    <label>Trainers:</label>
                    <select id="trainers" name="trainers">
                        <option value="Excellent">Excellent</option>
                        <option value="Average">Average</option>
                        <option value="Bad">Bad</option>
                        
                    </select> -->
                    <label>Trainer Rating:</label>
                   
                    <select id="trainers" name="trainer_id">
                    <?php
                    include 'backend/connection.php';

                    $query = "select * from trainer";

                    $result = mysqli_query($conn, $query);

                    while ($res = mysqli_fetch_array($result)) {


                    ?>
                        <option value="<?php echo $res['id']; ?>"><?php echo $res['name']; ?></option>
                        <?php
                    }

                    ?> 
                        
                    </select>
                    <label>Rating:</label>
                    <input type="number" name="rating" class="form-control" min="1" max="5" required>
                    <br>

                    <button class="btn btn-success" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
        <?php
        if (isset($_POST['Logout'])) {
            session_destroy();
            echo "<script>
            window.location.href='./login.php';
            </script>";
        }
        ?>
</body>

</html>