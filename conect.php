<?php

$con = new mysqli('localhost', 'root', '', 'city_restaurant' );

if(!$con){
    die(mysqli_error($con));
}
?>