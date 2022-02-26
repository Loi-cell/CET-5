<?php 

	session_start();

    include 'functions.php';
    include 'config.php';

    $user_data = check_login($con);
    //echo "welcome" . $user_data['user_id'];

?>

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
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="articles.php">Related Articles</a>
        </li>
        
      
        </ul>

        <!-- <div class="navbar1" style="margin-right: 50px;">
          <button type="button" class="btn navbar-btn" onClick="location.href='wanttoknowyourfeeling.php'">
            <span class="glyphicon glyphicon-plus"></span> 
            Want to know how you're feeling?
          </button>
        </div> -->

        <div class="navbar2" >
            <?php
                    if ($_SESSION != true){
                        echo "<button class='btn navbar-btn' onclick=\"location.href='login.php';\">Log In</button>";
                    //     echo "<button type='button'class='btn navbar-btn' onClick="location.href='login.php';">
                    //     <span class='glyphicon glyphicon-plus'></span> 
                    //     Login
                    //   </button>";
                    
                    } else {
                        echo "<button type='button' class='btn navbar-btn' onclick=\"location.href='logout.php';\">
                        <span class='glyphicon glyphicon-plus'></span> 
                        Logout
                    </button>";
                    }
                    ?> 
        </div>
        
          
        <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
        
        
    </div>
    </nav>

    

    <fieldset style="border: 1px solid black" >
    <a id="survey">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Take a test</h2>
        </div>
        <div class="w-50 m-auto">

            <button onclick="check()">Check</button>

            <form action="questionnaire.php" method="post">
                
                <div class="form-group">
                    <label>DATE:</label>
                    <input type="text" id="date" name="date" readonly>
                </div>
                
                <fieldset class="fieldset2" style="border: 1px solid black" >
                <div class="form-group">
                                        <h5 style="text-align:center"><b>Little interest or pleasure in doing things</h5></b>
                    <input type="radio" name="interest" value="Not at all" id="1" required>Not at all<br>
                    <input type="radio" name="interest" value="Several Days"  >Several Days<br>
                    <input type="radio" name="interest" value="More than half the days"  >More than half the days<br>
                    <input type="radio" name="interest" value="Nearly every day"  >Nearly every day
                    <br>
                </div>
                </fieldset>

                <br><br>

                <fieldset class="fieldset2" style="border: 1px solid black" >
                <div class="form-group">
                    <h5 style="text-align:center"><b>Feeling down, depressed, or hopeless</h5></b>
                    <input type="radio" name="feeling" value="Not at all"  id="2" required>Not at all<br>
                    <input type="radio" name="feeling" value="Several Days"  >Several Days<br>
                    <input type="radio" name="feeling" value="More than half the days"  >More than half the days<br>
                    <input type="radio" name="feeling" value="Nearly every day"  >Nearly every day
                    <br>
                </div>
                </fieldset>

                <br><br>

                <fieldset class="fieldset2" style="border: 1px solid black" >
                <div class="form-group">
                <h5 style="text-align:center"><b>Trouble falling or staying asleep, or sleeping too much</h5></b>
                    <input type="radio" name="sleep" value="Not at all" id="3"  required>Not at all<br>
                    <input type="radio" name="sleep" value="Several Days"  >Several Days<br>
                    <input type="radio" name="sleep" value="More than half the days"  >More than half the days<br>
                    <input type="radio" name="sleep" value="Nearly every day"  >Nearly every day
                    <br>
                </div>
                </fieldset>

                <br><br>

                <fieldset class="fieldset2" style="border: 1px solid black" >
                <div class="form-group">
                <h5 style="text-align:center"><b>Feeling tired or having little energy</h5></b>
                    <input type="radio" name="energy" value="Not at all"  id="4" required>Not at all<br>
                    <input type="radio" name="energy" value="Several Days"  >Several Days<br>
                    <input type="radio" name="energy" value="More than half the days"  >More than half the days<br>
                    <input type="radio" name="energy" value="Nearly every day"  >Nearly every day
                </div>
                </fieldset>

                <br><br>

                <fieldset class="fieldset2" style="border: 1px solid black" >
                <div class="form-group">
                <h5 style="text-align:center"><b>Poor appetite or overeating</h5></b>
                    <input type="radio" name="appetite" value="Not at all"  id="5" required>Not at all<br>
                    <input type="radio" name="appetite" value="Several Days"  >Several Days<br>
                    <input type="radio" name="appetite" value="More than half the days"  >More than half the days<br>
                    <input type="radio" name="appetite" value="Nearly every dayg"  >Nearly every day
                </div>
                </fieldset>

                <br><br>

                <fieldset class="fieldset2" style="border: 1px solid black" >
                <div class="form-group">
                <h5 style="text-align:center"><b>Feeling bad about yourself — or that you are a failure or have let yourself or your family down</h5></b>
                    <input type="radio" name="esteem" value="Not at all" id="6"  required>Not at all<br>
                    <input type="radio" name="esteem" value="Several Days"  >Several Days<br>
                    <input type="radio" name="esteem" value="More than half the days"  >More than half the days<br>
                    <input type="radio" name="esteem" value="Nearly every day"  >Nearly every day
                </div>
                </fieldset>

                <br><br>

                <fieldset class="fieldset2" style="border: 1px solid black" >
                <div class="form-group">
                <h5 style="text-align:center"><b>Trouble concentrating on things, such as reading the newspaper or watching television</h5></b>
                    <input type="radio" name="concentration" value="Not at all" id="7" required>Not at all<br>
                    <input type="radio" name="concentration" value="Several Days"  >Several Days<br>
                    <input type="radio" name="concentration" value="More than half the days"  >More than half the days<br>
                    <input type="radio" name="concentration" value="Nearly every day"  >Nearly every day
                </div>
                </fieldset>

                <br><br>

                <fieldset class="fieldset2" style="border: 1px solid black" >
                <div class="form-group">
                <h5 style="text-align:center"><b>Moving or speaking so slowly that other people could have noticed? Or the opposite — being so fidgety or restless that you have been moving around a lot more than usual </h5></b>
                    <input type="radio" name="slowness" value="Not at all"  id="8" required>Not at all<br>
                    <input type="radio" name="slowness" value="Several Days"  >Several Days<br>
                    <input type="radio" name="slowness" value="More than half the days"  >More than half the days<br>
                    <input type="radio" name="slowness" value="Nearly every day"  >Nearly every day
                </div>
                </fieldset>

                <br><br>

                <fieldset class="fieldset2" style="border: 1px solid black" >
                <div class="form-group">
                <h5 style="text-align:center"><b>Thoughts that you would be better off dead or of hurting yourself in some way</h5></b>
                    <input type="radio" name="thoughts" value="Not at all" id="9"  required>Not at all<br>
                    <input type="radio" name="thoughts" value="Several Days"  >Several Days<br>
                    <input type="radio" name="thoughts" value="More than half the days"  >More than half the days<br>
                    <input type="radio" name="thoughts" value="Nearly every day"  >Nearly every day
                </div>
                </fieldset>

                <br><br>

                <fieldset class="fieldset2" style="border: 1px solid black" >
                <div class="form-group">
                <h5 style="text-align:center"><b>If you checked off any problems, how difficult have these problems made it for you to do your work, take care of things at home, or get along with other people?</h5></b>
                    <input type="radio" name="difficulty" value="Not at all" id="10"  required>Not difficult at all<br>
                    <input type="radio" name="difficulty" value="Several Days"  >Several Days<br>
                    <input type="radio" name="difficulty" value="More than half the days"  >More than half the days<br>
                    <input type="radio" name="difficulty" value="Nearly every day"  >Nearly every day
                </div>
                </fieldset>

                <button type="submit" class="btn btn-success">
                    Submit
                </button>
            </form>
        

        </div>
    </a>
    </section>
    </fieldset>

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
<script>
        var months = ["January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
        ];
        var n = new Date();
        var y = n.getFullYear();
        var m = n.getMonth();
        var d = n.getDate();
        document.getElementById("date").value = d + " " + months[m] + " " + y;
</script>
<script>
    function check() {
    document.getElementById("1").checked = true;
    document.getElementById("2").checked = true;
    document.getElementById("3").checked = true;
    document.getElementById("4").checked = true;
    document.getElementById("5").checked = true;
    document.getElementById("6").checked = true;
    document.getElementById("7").checked = true;
    document.getElementById("8").checked = true;
    document.getElementById("9").checked = true;
    document.getElementById("10").checked = true;
}
</script>

</html>
