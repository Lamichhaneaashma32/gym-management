<?php
include 'connection.php';

session_start();
if (!isset($_SESSION['AdminLoginId']))        //!isset means if not set?
{
    header("location:../admin.php");
}

if (isset($_POST['done'])) {
    $id = $_GET['id'];
    $fname = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    

    $query = "UPDATE trainer SET `id`='$id',`name`='$fname',`email`='$email',`contact`='$contact' WHERE id='$id'";

    $result = mysqli_query($conn, $query);

    header('location:./trainer.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="../css/das.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        background: url("../img/bg.jpg");
        background-repeat: repeat-x;
        background-size: cover;
    }
</style>
<body>
<div id="welcome">
        <h1>Welcome to Admin Panel--- <?php echo $_SESSION['AdminLoginId'] ?>---</h1>
        <form method="POST">
            <button name="Logout">LOG OUT</button>
        </form>


    </div>
<div class="col-lg-4 m-auto">
        <form method="POST">
            <br><br>
            <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Update Trainer</h1>
                </div>
                <br>
                <label>Name:</label>
                <input type="text" name="name" class="form-control"required>
                <label>Email:</label>
                <input type="text" name="email" class="form-control" required>
                <label>Contact:</label>
                <input type="text" name="phone" class="form-control" required>

                <button class="btn btn-success" type="submit" name="done">Update</button>
            </div>
        </form>
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