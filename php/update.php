<?php
session_start();
include('connection.php');
if($con){
    $Name = $_POST["Name"];
    $Status = $_POST["Status"];
    $Time = $_POST["Time"];
    $dept = $_SESSION['MY_VARIABLE'];

    //Sql Query
    $upd = "Update staff set Name = '$Name', Status ='$Status', Time = '$Time' where Dept='$dept';";

    $new_upd = mysqli_query($con, $upd);

    if($new_upd){
        header("location: view.php");

    }
    else{
        header("location: Edit.php");
    }

}
?>