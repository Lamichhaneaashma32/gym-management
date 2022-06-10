


<?php
include_once "connection.php";
session_start();
if (!isset($_SESSION['AdminLoginId']))        //!isset means if not set?
{
    header("location:../admin.php");
}

if (isset($_POST['done'])) {
    $id = $_POST['id'];
    $fname = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $program = $_POST['program'];
    $time = $_POST['time'];
    $contact = $_POST['phone'];



    $query = "INSERT INTO trainer(`id`,`name`, `email`, `contact`,`program`,`time`) VALUES ('$id','$fname','$email','$contact','$program','$time')";

    $result = mysqli_query($conn, $query);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Admin Panel[Trainers Field]</title>
    <link rel="stylesheet" href="../css/das.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">


    
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

</head>
<style>
    body{
        background: url("../img/bg.jpg");
        background-repeat: repeat-x;
        background-size: cover;
    }
</style>

<body>
    
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
                        <h1 class="text-white text-center">Insert Active Gym Trainers</h1>
                    </div>
                    <br>
                    <!-- <label>ID:</label>
                    <input type="text" name="id" class="form-control" required> -->
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" requied>
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control" required>
                    <label>Contact:</label>
                    <input type="text" name="phone" class="form-control" required>
                  
                    <label >Program Choose</label><br>
            <select id="program" name="program"required>
                <option value="yoga">Yoga</option>
                <option value="zumba-dance">Zumba Dance</option>
                <option value="cardiovascular">Cardiovascular</option>
                <option value="weight-lifting">Weight Lifting</option>
            </select><br>
                    <label>Available Time</label>
                    
                    <input type="text" name="time" class="form-control" required>
                    <br>
                    
                    <button class="btn btn-success" type="submit" name="done">ADD</button>
                </div>
            </form>
        </div>

        <div class="container">
            <div class="col-lg-12">
                <br><br>
                <h1 class="text-warning text-center" id="trainer">Display Active Trainers</h1>
                <table class="table table-striped table table-hover table-bordered">
                    <tr class="bg-dark text-white text-center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Program</th>
                        <th>Time</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    <?php
                    include 'connection.php';

                    $query = "select * from trainer";

                    $result = mysqli_query($conn, $query);

                    while ($res = mysqli_fetch_array($result)) {


                    ?>
                        <tr class="text-center">
                            <td class="text-white"><?php echo $res['id']; ?></td>
                            <td class="text-white"> <?php echo $res['name']; ?></td>
                            <td class="text-white"> <?php echo $res['email']; ?></td>
                            <td class="text-white"> <?php echo $res['contact']; ?></td>
                            <td class="text-white"> <?php echo $res['program']; ?></td>
                            <td class="text-white"> <?php echo $res['time']; ?></td>
                            <td> <button class="btn-danger btn"><a href="delete_trainer.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button></td>
                            <td> <button class="btn-primary btn"> <a href="update_trainer.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a></button></td>
                            
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