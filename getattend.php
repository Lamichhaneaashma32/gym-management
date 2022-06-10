<?php
include './backend/connection.php';

session_start();

if (isset($_POST['getattend'])) {


    $date = $_POST["cyear"]."-".$_POST["cmonth"]."-".$_POST["cdate"];
    $query = "select * from member_table";
    $res = mysqli_query($conn, $query);
    // $sql = mysqli_fetch_all($res, MYSQLI_ASSOC);
    // print_r($sql);

    
    while($row = mysqli_fetch_array($res))
    {
        $mno = $row["id"];
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        $age = $row['age'];
        if(isset($_POST[$mno]))
        {
            $query1 = "INSERT INTO attendance(`id`, `firstname`, `lastname`, `age`, `date`, `attendance`)
            VALUES ('$mno','$fname','$lname','$age','$date','Present')";
            
            
        }else{
            $query1 = "INSERT INTO attendance(`id`, `firstname`, `lastname`, `age`,`date`, `attendance`)
             VALUES ('$mno','$fname','$lname','$age','$date','Absent')";
             
        }
        
        
       
        mysqli_query($conn, $query1) or die("Insert Error" . $mno);
        print "<script>";
        print "alert('Attendance got Successfully');";
        print "self.location = 'getattend.php';";
        print "</script>";
            }
    }else{
    header("location:./attendance.php");
}
?>