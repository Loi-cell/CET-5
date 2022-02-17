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

    

    <a id="Schedule">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Take a test</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="schedule.php" method="post">
                <div class="form-group">
                    <p>Little interest or pleasure in doing things</p>
                    <input type="radio" name="gender" value=" Little interest or pleasure in doing things"  >Not at all<br>
                    <input type="radio" name="gender" value=" Little interest or pleasure in doing things"  >Several Days<br>
                    <input type="radio" name="gender" value=" Little interest or pleasure in doing things"  >More than half the days<br>
                    <input type="radio" name="gender" value=" Little interest or pleasure in doing things"  >Nearly every day
                    <br>
                </div>

                <br><br>

                <div class="form-group">
                    <p>Feeling down, depressed, or hopeless</p>
                    <input type="radio" name="gender" value="Feeling down, depressed, or hopeless"  >Not at all<br>
                    <input type="radio" name="gender" value="Feeling down, depressed, or hopeless"  >Several Days<br>
                    <input type="radio" name="gender" value="Feeling down, depressed, or hopeless"  >More than half the days<br>
                    <input type="radio" name="gender" value="Feeling down, depressed, or hopeless"  >Nearly every day
                    <br>
                </div>

                <br><br>

                <div class="form-group">
                <p>Trouble falling or staying asleep, or sleeping too much</p>
                    <input type="radio" name="gender" value="Trouble falling or staying asleep, or sleeping too much"  >Not at all<br>
                    <input type="radio" name="gender" value="Trouble falling or staying asleep, or sleeping too much"  >Several Days<br>
                    <input type="radio" name="gender" value="Trouble falling or staying asleep, or sleeping too much"  >More than half the days<br>
                    <input type="radio" name="gender" value="Trouble falling or staying asleep, or sleeping too much"  >Nearly every day
                    <br>
                </div>

                <br><br>

                <div class="form-group">
                <p>Feeling tired or having little energy</p>
                    <input type="radio" name="gender" value="Feeling tired or having little energy"  >Not at all<br>
                    <input type="radio" name="gender" value="Feeling tired or having little energy"  >Several Days<br>
                    <input type="radio" name="gender" value="Feeling tired or having little energy"  >More than half the days<br>
                    <input type="radio" name="gender" value="Feeling tired or having little energy"  >Nearly every day
                </div>

                <br><br>

                <div class="form-group">
                <p>Feeling tired or having little energy</p>
                    <input type="radio" name="gender" value="Feeling tired or having little energy"  >Not at all<br>
                    <input type="radio" name="gender" value="Feeling tired or having little energy"  >Several Days<br>
                    <input type="radio" name="gender" value="Feeling tired or having little energy"  >More than half the days<br>
                    <input type="radio" name="gender" value="Feeling tired or having little energy"  >Nearly every day
                </div>

                <br><br>

                <div class="form-group">
                <p>Poor appetite or overeating</p>
                    <input type="radio" name="gender" value="Poor appetite or overeating"  >Not at all<br>
                    <input type="radio" name="gender" value="Poor appetite or overeating"  >Several Days<br>
                    <input type="radio" name="gender" value="Poor appetite or overeating"  >More than half the days<br>
                    <input type="radio" name="gender" value="Poor appetite or overeating"  >Nearly every day
                </div>

                <br><br>

                <div class="form-group">
                <p>Feeling bad about yourself — or that you are a failure or have let yourself or your family down </p>
                            <input type="radio" name="gender" value="Feeling bad about yourself — or that you are a failure or have let yourself or your family down "  >Not at all<br>
                            <input type="radio" name="gender" value="Feeling bad about yourself — or that you are a failure or have let yourself or your family down "  >Several Days<br>
                            <input type="radio" name="gender" value="Feeling bad about yourself — or that you are a failure or have let yourself or your family down "  >More than half the days<br>
                            <input type="radio" name="gender" value="Feeling bad about yourself — or that you are a failure or have let yourself or your family down "  >Nearly every day
                </div>

                <br><br>

                <div class="form-group">
                <p>Trouble concentrating on things, such as reading the newspaper or watching television </p>
                            <input type="radio" name="gender" value="Trouble concentrating on things, such as reading the newspaper or watching television"  >Not at all<br>
                            <input type="radio" name="gender" value="Trouble concentrating on things, such as reading the newspaper or watching television"  >Several Days<br>
                            <input type="radio" name="gender" value="Trouble concentrating on things, such as reading the newspaper or watching television"  >More than half the days<br>
                            <input type="radio" name="gender" value="Trouble concentrating on things, such as reading the newspaper or watching television"  >Nearly every day
                </div>

                <br><br>

                <div class="form-group">
                <p> Moving or speaking so slowly that other people could have noticed? Or the opposite — being so fidgety or restless that you have been moving around a lot more than usual </p>
                            <input type="radio" name="gender" value=" Moving or speaking so slowly that other people could have noticed? Or the opposite — being so fidgety or restless that you have been moving around a lot more than usual "  >Not at all<br>
                            <input type="radio" name="gender" value=" Moving or speaking so slowly that other people could have noticed? Or the opposite — being so fidgety or restless that you have been moving around a lot more than usual "  >Several Days<br>
                            <input type="radio" name="gender" value=" Moving or speaking so slowly that other people could have noticed? Or the opposite — being so fidgety or restless that you have been moving around a lot more than usual "  >More than half the days<br>
                            <input type="radio" name="gender" value=" Moving or speaking so slowly that other people could have noticed? Or the opposite — being so fidgety or restless that you have been moving around a lot more than usual "  >Nearly every day
                </div>

                <br><br>

                <div class="form-group">
                <p>Thoughts that you would be better off dead or of hurting yourself in some way</p>
                    <input type="radio" name="gender" value="Thoughts that you would be better off dead or of hurting yourself in some way"  >Not at all<br>
                    <input type="radio" name="gender" value="Thoughts that you would be better off dead or of hurting yourself in some way"  >Several Days<br>
                    <input type="radio" name="gender" value="Thoughts that you would be better off dead or of hurting yourself in some way"  >More than half the days<br>
                    <input type="radio" name="gender" value="Thoughts that you would be better off dead or of hurting yourself in some way"  >Nearly every day
                </div>

                <button type="submit" class="btn btn-success">
                    Submit
                </button>
            </form>

        </div>
    </a>
    </section>


    
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