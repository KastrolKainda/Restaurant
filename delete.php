
<?php

include 'conect.php';

if(isset($_GET['deleteID']))
{
    $ID = $_GET['deleteID'];
    $sql = "delete from employees where ID = $ID";

    $result = mysqli_query($con,$sql);

    if($result){
                // SHOW --> the employees list after deletion has taken place
        header('location:User_Infor.php');
    }

    else{
        die(mysqli_error($con));
    }
}

?>