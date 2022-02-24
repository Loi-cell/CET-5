<?php

    session_start();
    
    include 'functions.php';
    include 'config.php';

    $user_data = check_login($con);
    $user_info = getinfo($con);

    // $con = mysqli_connect('localhost', 'root');

    // if($con){
    //     echo "Connection Successful";
    // }
    // else{
    //     echo "Connection Failed";
    // }

    mysqli_select_db($con, 'whatareyoufeeling?');

    $date = $_POST['date'];
    $interest = $_POST['interest'];
    $feeling = $_POST['feeling'];
    $sleep = $_POST['sleep'];
    $energy = $_POST['energy'];
    $appetite = $_POST['appetite'];
    $esteem = $_POST['esteem'];
    $concentration = $_POST['concentration'];
    $slowness = $_POST['slowness'];
    $thoughts = $_POST['thoughts'];
    $difficulty = $_POST['difficulty'];
    $user_id = $user_data['user_id'];

    
    // $query = "INSERT INTO record (date, interest, feeling, sleep, energy, appetite, esteem, concentration, slowness, thoughts, difficulty, user_id) VALUES ('$date', '$interest', '$feeling', '$sleep', '$energy', '$appetite', '$esteem', '$concentration', '$slowness', '$thoughts', '$difficulty', '$user_id')";
    // $a = "UPDATE record SET column='postvariable' ";


    
    

    if ($user_info === null)
    {
        $query = "INSERT INTO record (date, interest, feeling, sleep, energy, appetite, esteem, concentration, slowness, thoughts, difficulty, user_id) VALUES ('$date', '$interest', '$feeling', '$sleep', '$energy', '$appetite', '$esteem', '$concentration', '$slowness', '$thoughts', '$difficulty', '$user_id')";
    }
    else{
        //$query = "UPDATE record SET 'date' = '$date', 'interest' = '$interest', 'feeling' = '$feeling' WHERE user_id = '$user_id'";
        //echo '$user_id';

        $query = "UPDATE record SET date = '$date', interest ='$interest', feeling = '$feeling', sleep = '$sleep', energy = '$energy', appetite = '$esteem', concentration = '$concentration', slowness = '$slowness', thoughts = '$thoughts', difficulty = '$difficulty'  WHERE user_id = $user_id";
    }

    mysqli_query($con, $query);
    
    function function_alert($message) {

        // Display the alert box 
        echo "<script>alert('$message');</script>";
    } 


    
    header('location:index.php');


?>