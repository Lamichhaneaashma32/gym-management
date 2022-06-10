<?php
include_once "connection.php";
session_start();
if (!isset($_SESSION['AdminLoginId']))        //!isset means if not set?
{
    header("location:../admin.php");
}

if (isset($_POST['done'])) {
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];

    $query = "INSERT INTO member_table(`id`,`firstname`, `lastname`, `age`) VALUES ('$id','$fname','$lname','$age')";

    $result = mysqli_query($conn, $query);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Admin Panel</title>
    <link rel="stylesheet" href="../css/das.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">


    
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

</head>
<style>
    body{
        background-size: cover;
        background-repeat: repeat-x;
        background: url("../img/bg.jpg");
        width: 100%;
    }
    .admin_nav ul li{
        border-top: 3px solid skyblue;
        border-bottom: 3px solid white;
        border-left: 3px solid blue;
        border-right: 3px solid yellow;
        align-items: center;
        width: 200px;
        display: inline-block;
        justify-content: space-between;
        list-style: none;
    }
    .admin_nav ul a{
        color: white;
    }
    .admin_nav ul a:hover{
        color: yellow;
    }
</style>

<body>
    <div>
        <nav class="admin_nav">
            <ul>
                <li><a href="#member">View Member Records</a></li>
                <li><a href="#advance">Advance Registration</a></li>
                <li><a href="#basic">Basic Package Member</a></li>
                <li><a href="#premium">Premium Package Member</a></li>
                <li><a href="../attendance.php">View Attendance</a></li>
                <li><a href="trainer.php">View Trainers</a></li>
                <li><a href="#trainer">View User_Feedback</a></li>
                
            </ul>
        </nav>
    </div>
    <section class="header">

        <div id="welcome">
            <h1>Welcome to Gym Management System--- <?php echo $_SESSION['AdminLoginId'] ?>---</h1>
            <form method="POST">
                <button name="Logout" id="logout">LOG OUT</button>
            </form>

        </div>
        <div class="col-lg-4 m-auto">
            <form method="POST">
                <br><br>
                <div class="card">
                    <div class="card-header bg-dark">
                        <h1 class="text-white text-center">Insert Active Gym Members</h1>
                    </div>
                    <br>
                    <label>ID:</label>
                    <input type="text" name="id" class="form-control" required>
                    <label>First Name:</label>
                    <input type="text" name="firstname" class="form-control" required>
                    <label>Last Name:</label>
                    <input type="text" name="lastname" class="form-control" required>
                    <label>Age:</label>
                    <input type="text" name="age" class="form-control" required>
                    <br>
                   
                    <button class="btn btn-success" type="submit" name="done">ADD</button>
                </div>
            </form>
        </div>

        <div class="container">
            <div class="col-lg-12">
                <br><br>
                <h1 class="text-warning text-center" id="member">Display Member Records</h1>
                <table class="table table-striped table table-hover table-bordered">
                    <tr class="bg-dark text-white text-center">
                       
                        <th> Name</th>
                        <th> Email</th>
                        <th>Age</th>
                    
                        <th> Contact Number </th>
                        <th>Status</th>
                        <th>Delete</th>
                        <th>Update</th>
                        <th>Approve</th>
                        <th><button class="btn-primary btn"><a href="../attendance.php" class="text-white">Get_Attendance</a></button></th>
                    </tr>
                    <?php
                    include 'connection.php';

                    $query = "select * from advance_register";

                    $result = mysqli_query($conn, $query);

                    while ($res = mysqli_fetch_array($result)) {


                    ?>
                        <tr class="text-center">
                          
                            <td class="text-white"> <?php echo $res['name']; ?></td>
                            <td class="text-white"> <?php echo $res['email']; ?></td>
                            <td class="text-white"> <?php echo $res['age']; ?></td>
                            <td class="text-white"> <?php echo $res['contact']; ?></td>
                            
                         <td class="text-white"> <?php echo $res['status']; ?></td>
                            <td> <button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button></td>
                            <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a></button></td>
                            <td> 
                            <?php if( $res['status']=="UNVERIFIED"){ ?>
                            <button class="btn-primary btn"> <a href="approve.php?id=<?php echo $res['id']; ?>" class="text-white">Verify</a></button>
                            <?php  } else {?> 
                            <button class="btn-primary btn"> <a href="disapprove.php?id=<?php echo $res['id']; ?>" class="text-white">Unverify</a></button>
                            <?php  } ?> 
                            </td>
                        </tr>
                    <?php
                    }

                    ?>
                </table>
            </div>
        </div>

        <!-- Advance Registration portion -->

        <!-- <div class="container">
            <div class="col-lg-12">
                <br><br>
                <h1 class="text-warning text-center" id="advance">Advance Registered Member Records</h1>
                <table class="table table-striped table table-hover table-bordered">
                    <tr class="bg-dark text-white text-center">
                    
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Package</th>
                        <th>Program</th>
                        <th>Trainer</th>
                        
                        <th>Date Of Joining</th>
                    </tr>
                    <?php
                    include 'connection.php';

                    $query = "select * from advance_register";

                    $result = mysqli_query($conn, $query);

                    while ($res = mysqli_fetch_array($result)) {


                    ?>
                        <tr class="text-center">
                            
                            <td class="text-white"> <?php echo $res['firstname']; ?></td>
                            <td class="text-white"> <?php echo $res['lastname']; ?></td>
                            <td class="text-white"> <?php echo $res['age']; ?></td>
                            <td class="text-white"> <?php echo $res['package']; ?></td>
                            <td class="text-white"> <?php echo $res['program']; ?></td>
                            <td class="text-white"> <?php echo $res['trainer']; ?></td>
                           
                            <td class="text-white"> <?php echo $res['date']; ?></td>
                            
                        </tr>
                    <?php
                    }

                    ?>
                </table>
            </div>
        </div> -->

        <!--Basic Package Records -->

        <div class="container">
            <div class="col-lg-12">
                <br><br>
                <h1 class="text-warning text-center" id="basic">Basic Subcription Table</h1>
                <table class="table table-striped table table-hover table-bordered">
                    <tr class="bg-dark text-white text-center">
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Package</th>
                        <th>Trainer</th>
                        
                        <th>Date Of Joining</th>
                    </tr>
                    <?php
                    include 'connection.php';

                    $query = "select * from basic_register";

                    $result = mysqli_query($conn, $query);

                    while ($res = mysqli_fetch_array($result)) {


                    ?>
                        <tr class="text-center">
                            
                            <td class="text-white"> <?php echo $res['firstname']; ?></td>
                            <td class="text-white"> <?php echo $res['lastname']; ?></td>
                            <td class="text-white"> <?php echo $res['age']; ?></td>
                            <td class="text-white"> <?php echo $res['package']; ?></td>
                            <td class="text-white"> <?php echo $res['trainer']; ?></td>
                            
                            <td class="text-white"> <?php echo $res['date']; ?></td>
                            
                        </tr>
                    <?php
                    }

                    ?>
                </table>
            </div>
        </div>

        <!--Premium Package Records -->

        <div class="container">
            <div class="col-lg-12">
                <br><br>
                <h1 class="text-warning text-center" id="premium">Premium Subcription Table</h1>
                <table class="table table-striped table table-hover table-bordered">
                    <tr class="bg-dark text-white text-center">
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Package</th>
                        <th>Trainer</th>
                        <th>Training Time</th>
                        <th>Date Of Joining</th>
                    </tr>
                    <?php
                    include 'connection.php';

                    $query = "select * from premium_register";

                    $result = mysqli_query($conn, $query);

                    while ($res = mysqli_fetch_array($result)) {


                    ?>
                        <tr class="text-center">
                            
                            <td class="text-white"> <?php echo $res['firstname']; ?></td>
                            <td class="text-white"> <?php echo $res['lastname']; ?></td>
                            <td class="text-white"> <?php echo $res['age']; ?></td>
                            <td class="text-white"> <?php echo $res['package']; ?></td>
                            <td class="text-white"> <?php echo $res['trainer']; ?></td>
                            
                            <td class="text-white"> <?php echo $res['date']; ?></td>
                            
                        </tr>
                    <?php
                    }

                    ?>
                </table>
            </div>
        </div>
        <!--View Feedback -->
        <div class="container">
            <div class="col-lg-12">
                <br><br>
                <h1 class="text-warning text-center" id="trainer">User Feedback Record</h1>
                <table class="table table-striped table table-hover table-bordered">
                    <tr class="bg-dark text-white text-center">
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        
                        
                    </tr>
                    <?php
                    include 'connection.php';

                    $query = "select * from user_feedback";

                    $result = mysqli_query($conn, $query);

                    while ($res = mysqli_fetch_array($result)) {


                    ?>
                        <tr class="text-center">
                            
                            <td class="text-white"> <?php echo $res['firstname']; ?></td>
                            <td class="text-white"> <?php echo $res['lastname']; ?></td>
                            <td class="text-white"> <?php echo $res['email']; ?></td>
                            
                            
                            
                        </tr>
                    <?php
                    }

                    ?>
                </table>
            </div>
        </div>
        <?php
        
        if (isset($_POST['Logout'])) {
            session_destroy();
            echo "<script>window.location='../admin.php'</script>";
            
        }
        ?>

</body>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/jquery.min.js"></script>

</html>