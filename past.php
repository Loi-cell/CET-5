<!DOCTYPE html>
<html lang="en">
<head>

    <title>WhatAreYouFeeling</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <button type="button" class="btn navbar-btn">
            <span class="glyphicon glyphicon-plus"></span> 
            Want to know how you're feeling?
        </button>
        </div>

        <div class="navbar2" >
        <button type="button" class="btn navbar-btn">
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



    <a id="Schedule">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">You want to schedule a talk?</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="schedule.php" method="post">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Contact Details:</label>
                    <input type="text" name="number" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Date:</label>
                    <input type="date" name="date" class="form-control">
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
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    

   

</body>
</html>