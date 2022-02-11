<?php 

	session_start();
	if(isset($_SESSION['userlogin'])){
		header("Location: index.php");
	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to your Account</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">WhatAreYouFeeling?</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Your Secrets
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="past.php">Your Past</a>
            <a class="dropdown-item" href="present.php">The Present</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="articles.php">Related Articles</a>
        </li>
        
      
        </ul>

        <div class="navbar1" >
          <button type="button" class="btn navbar-btn">
            <span class="glyphicon glyphicon-plus"></span> 
            Want to know how you're feeling?
          </button>
        </div>

        <div class="navbar2" >
          <button type="button" class="btn navbar-btn" onClick="#'">
            <span class="glyphicon glyphicon-plus"></span> 
            Login
          </button>
        </div>
          
        <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
        
        
    </div>
    </nav>

    

    <div class="container h-100 py-5">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <h2>Login to your account</h2>
                <br>
                <div class="d-flex justify-content-center form_container">
                    <form>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>					
                            </div>
                            <input type="text" name="username" id="username" class="form-control input_user" required>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>					
                            </div>
                            <input type="password" name="password" id="password" class="form-control input_pass" required>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                            </div>
                        </div>
                    
                </div>
                <div class="d-flex justify-content-center mt-3 login_container">
                    <button type="button" name="button" id="login" class="btn btn-success">Login</button> 
                </div>
                </form>
                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        Don't have an account? <a href="registration.php" class="ml-2">Sign Up</a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $(function(){
            $('#login').click(function(e){

                var valid = this.form.checkValidity();

                if(valid){
                    var username = $('#username').val();
                    var password = $('#password').val();
                }

                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'jslogin.php',
                    data:  {username: username, password: password},
                    success: function(data){
                        alert(data);
                        if($.trim(data) === "1"){
                            setTimeout(' window.location.href =  "index.php"', 1000);
                        }
                    },
                    error: function(data){
                        alert('there were errors while doing the operation.');
                    }
                });

            });
        });
    </script>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>