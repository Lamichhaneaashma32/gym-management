<?php
include './backend/connection.php';
session_start();
if (!isset($_SESSION['AdminLoginId']))        //!isset means if not set?
{
    header("location:../admin.php");
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Admin Panel</title>
    <link rel="stylesheet" href="./css/das.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    
</head>

<style>
    body{
        background: url("./img/bg.jpg");
        background-repeat: repeat-x;
        background-size: cover;
    }
</style>

<body>
    <section class="header">

        <div id="welcome">
            <h1>Welcome to Gym Management System-- <?php echo $_SESSION['AdminLoginId'] ?>--</h1>
            <form method="POST">
                <button name="Logout">LOG OUT</button>
            </form>


        </div>


        <div class="container">
            <div class="col-lg-12">
                <?php
                if(isset($_SESSION['status'])){
                    echo "<h4>".$_SESSION['status']."</h4>";
                    unset($_SESSION['status']);
                }
                ?>
                <br><br>
                <h1 class="text-warning text-center">Get Attendance</h1>
                <form action="getattend.php" method="POST">
                <tr>
                        <td>Select date:<br/>
                        <?php
                        $dt = getdate();
                        $day = $dt["mday"];
                        $month = date("m");
                        $year = $dt["year"];
                        echo "<select name='cdate'>";
                        for($a=1;$a<=31;$a++)
                        {
                            if($day ==$a)
                            echo "<option value='$a' selected='selected'>$a</option>";
                            else
                            echo "<option value='$a'>$a</option>";
                        }
                        echo "</select><select name='cmonth'>";
                        for($a=1;$a<=12;$a++)
                        {
                            if($month ==$a)
                            echo "<option value='$a' selected='selected'>$a</option>";
                            else
                            echo "<option value='$a'>$a</option>";
                        }
                        echo "</select><select name='cyear'>";
                        for($a=2010;$a<=$year;$a++)
                        {
                            if($year ==$a)
                            echo "<option value='$a' selected='selected'>$a</option>";
                            else
                            echo "<option value='$a'>$a</option>";
                        }
                        echo "</select>"
                        ?>
                        </td>
                    </tr>

                <table class="table table-striped table table-hover table-bordered">
                   
                    <tr class="bg-dark text-white text-center">
                        <th><button type="submit" class="btn-primary btn" name="getattend">Submit</button></th>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        



                    </tr>
                    <?php
                    include './backend/connection.php';

                    $query = "select * from member_table";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        foreach ($result as $row) {
                    ?>
                            <tr>
                                <td style="width:10px; text-align:center">
                                    <input type="checkbox" text-align="center" name=<?php echo $row["id"]; ?> value="1">
                                    
                                </td>
                                <td class="text-white"><?= $row['id']; ?></td>
                                <td class="text-white"><?= $row['firstname']; ?></td>

                                <td class="text-white"><?= $row['lastname']; ?></td>
                                <td class="text-white"><?= $row['age']; ?></td>
                                
                                
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="5">No Records Found</td>
                        </tr>
                    <?php

                    }
                    ?>


                </table>
                </form>
            </div>
        </div>

        <!-- This is the display field to show attendance of the member -->

        <div class="container">
            <div class="col-lg-12">
                <br><br>
                <h1 class="text-warning text-center" id="advance">Display Attendance Table</h1>
                <table class="table table-striped table table-hover table-bordered">
                    <tr class="bg-dark text-white text-center">
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Date</th>
                        <th>Attendance</th>
                    </tr>
                    <?php
                    include './backend/connection.php';

                    $query = "select * from attendance";

                    $result = mysqli_query($conn, $query);

                    while ($res = mysqli_fetch_array($result)) {


                    ?>
                        <tr class="text-center">
                            <td class="text-white"> <?php echo $res['id']; ?></td>
                            <td class="text-white"> <?php echo $res['firstname']; ?></td>
                            <td class="text-white"> <?php echo $res['lastname']; ?></td>
                            <td class="text-white"> <?php echo $res['age']; ?></td>
                            <td class="text-white"> <?php echo $res['date']; ?></td>
                            <td class="text-white"> <?php echo $res['attendance']; ?></td>
                            
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
            echo "<script>window.location='./admin.php'</script>";
        }
        ?>

</body>

<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/jquery.min.js"></script>

</html>