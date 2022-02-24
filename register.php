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
    $gender = $_POST['gender'];
    $password = $_POST['password'];


    $query = "INSERT INTO users (name, number, email, gender, password) VALUES ('$name', '$number', '$email', '$gender', '$password')";

    mysqli_query($con, $query);
    header('location:index.php');

?>