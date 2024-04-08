<?php
include 'conect.php';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass_word = $_POST['pass_word'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $branch_no = $_POST['branch_no'];
    $created_at = $_POST['created_at'];

    $sql = "insert into employees (name, email, pass_word, phone, address, position, salary, branch_no, created_at) 
    values ('$name', '$email', '$pass_word', '$phone', '$address', '$position', $salary, '$branch_no', '$created_at')";

    $result = mysqlI_query($con, $sql);
    if($result){
            // TAKE ME TO EMPLYEES LIST 
      header('location:User_Infor.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="css/User_Add.css">
</head>
<body>
<br>
<form class="all" method="POST" >
        <br>
        <h2> Add User Information </h2><br>

    <div class="form-group">
        <label for="text"> Name </label><br>
        <input type="text" id="text" placeholder="Type here" name="name" autocomplete="off" required>
    </div><br>

    <div class="form-group">
        <label for="email"> Email </label><br>
        <input type="text" id="email" placeholder="Type here" name="email" autocomplete="off" required>
    </div><br>

    <div class="form-group">
        <label for="password"> Password</label><br>
        <input type="password" id="password" placeholder="Type here" name="pass_word" autocomplete="off" required>
    </div><br>

    <div class="form-group">
        <label for="text"> Phone </label><br>
        <input type="text" id="text" placeholder="Type here" name="phone" autocomplete="off" required>
    </div><br>

    <div class="form-group">
        <label for="text"> Address</label><br>
        <input type="text" id="text" placeholder="Type here" name="address" autocomplete="off" required>
    </div><br>

    <div class="form-group">
        <label for="text"> Position </label><br>
        <input type="text" id="text" placeholder="Type here" name="position" autocomplete="off" required>
    </div><br>

    <div class="form-group">
        <label for="number"> Salary </label><br>
        <input type="text" id="number" placeholder="Type here" name="salary" autocomplete="off" required>
    </div><br>

    <div class="form-group">
        <label for="text"> Branch No </label><br>
        <input type="text" id="text" placeholder="Type here" name="branch_no" autocomplete="off" required>
    </div><br>

    <div class="form-group">
        <label for="date"> Created At </label><br>
        <input type="text" id="date" placeholder="Type here" name="created_at" autocomplete="off" required>
    </div><br>
    <br><br><br><br>
    <button type="submit" name="submit" class="btn btn-primary" href="User_Infor.php"> Submit </button>
</form>
</body>
</html>