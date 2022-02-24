<?php
    $con = mysqli_connect('localhost', 'root');

    if($con){
        echo "Connection Successful";
    }
    else{
        echo "Connection Failed";
    }

    mysqli_select_db($con, 'whatareyoufeeling?');

    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $place = $_POST['place'];


    $query = "INSERT INTO schedule (name, number, email, date, place) VALUES ('$name', '$number', '$email', '$date', '$place')";

    mysqli_query($con, $query);
    header('location:index.php');

?>