<?php 

session_start();


	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>

<a href="index.php?logout=true">Logout</a>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>WhatAreYouFeeling</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>


<body>
    
    
    <a id="top"></a>

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
          <button type="button" class="btn navbar-btn" onClick="location.href='wanttoknowyourfeeling.php'">
            <span class="glyphicon glyphicon-plus"></span> 
            Want to know how you're feeling?
          </button>
        </div>

        <script>


            
        </script>
        <div class="navbar2" >
          <button type="button" class="btn navbar-btn" onClick="location.href='login.php'">
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

    

    <div>
        
        <br><h3 class="text-center">What are you actually feeling?</h3><br>
        
        <div class="video">
            <iframe src="https://www.youtube.com/embed/rSpg5Jxgjfc" frameborder="0" allowfullscreen=""></iframe><br>
        </div>

    </div>

    <!-- <a id="Be Positive">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Be Positive</h2>
        </div> 
        
        <div class="container-fluid">
            <div class="row">
        <div class="col-md-4 col-md-4 col-12">
            <img src="images/quote1.jpg" class="img-fluid pn-3">
        </div>   
        <div class="col-md-4 col-md-4 col-12">
            <img src="images/quote2.jpg" class="img-fluid pn-3">
        </div>
        <div class="col-md-4 col-md-4 col-12">
            <img src="images/quote3.jpg" class="img-fluid pn-3">
        </div>   
        </div>
        </div>
    </a>
    </section> -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-50" src="images/quote1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-50" src="images/quote2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-50" src="images/quote3.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-50" src="images/quote4.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-50" src="images/quote5.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-50" src="images/quote6.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-50" src="images/quote7.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-50" src="images/quote8.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>


    <a id="Schedule">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">You want to schedule a talk?</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="schedule.php" method="post">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" pattern="[^0-9]*" required>
                </div>
                <div class="form-group">
                    <label>Contact Details:</label>
                    <input type="text" name="number" class="form-control" pattern="[0-9]+" required>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                </div>
                <div class="form-group">
                    <label>Date:</label>
                    <input type="date" name="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Choose what foundation do you want to talk to:</label>

                        <select id="place" name="place" class="form-control">
                            <option value="Suicide Crisis Line">Suicide Crisis Line</option>
                            <option value="HopeLine">HopeLine</option>
                            <option value="Dial-A-Friend">Dial-A-Friend</option>
                        </select>
                    </div>
                <button type="submit" class="btn btn-success">
                    Submit
                </button>
            </form>

        </div>
    </a>
    </section>

    <!-- Footer -->
    <footer class="page-footer font-small text-dark">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">HelpLine</h5>

            <ul class="list-unstyled">
                <li>
                <a>Suicide Hotline&emsp; -&ensp; 09123456790</a>
                </li>
                <li>
                <a>HopeLine&emsp;&emsp;&emsp; -&ensp; 09123456790</a>
                </li>
                <li>
                <a>Dial-A-Friend&emsp; -&ensp; 09123456790</a>
                </li>
            </ul>

            </div>
        

        </div>
        <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright py-3">© 2020 Copyright:
        <a>@WhatAreYouFeeling.com</a>
        </div>
        <!-- Copyright -->

    </footer>


    <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    

   

</body>
<script>
        $(document).ready(function(){
        $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-to-top').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });
    });

    

</script>

</html>
