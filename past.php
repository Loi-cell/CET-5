<?php 

	session_start();

    include 'functions.php';
    include 'config.php';

    $user_data = check_login($con);
    $user_info = getinfo($con);
    // echo "welcome" . $user_info['interest'];

?>
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

        <div class="navbar1" style="margin-right: 50px;" >
        <button type="button" class="btn navbar-btn"  onClick="location.href='wanttoknowyourfeeling.php'">
            <span class="glyphicon glyphicon-plus"></span> 
            Want to know how you're feeling?
        </button>
        </div>

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
    
        <?php
        
            $date = $user_info['date'];
            $interest = $user_info['interest'];
            $feeling = $user_info['feeling'];
            $sleep = $user_info['sleep'];
            $energy = $user_info['energy'];
            $appetite = $user_info['appetite'];
            $esteem = $user_info['esteem'];
            $concentration = $user_info['concentration']; 
            $slowness = $user_info['slowness'];
            $thoughts = $user_info['thoughts'];
            $difficulty = $user_info['difficulty'];

            
            if($user_info === null)
            {
                echo '<p style="padding: 200px; margin-left: 50px; font-size: 30px; text-align:center">You have not yet answered our "Want to know you&#39re feelings Questionnaire". Please answer that questionnaire, so you can see your responses.</p>';
            }
            else
            {
                echo " <div style='font-size: 20px'>
                    <div>
                        <br>
                        <p style='text-align:center'>
                            Date When answered: $date</td>
                        </p>
                    </div>

                    <div style='padding-bottom: 50px'>
                        <table class='table-1' style='margin-left:auto; margin-right:auto; width: 75%; text-align:left;'>
                        <caption style='text-align:center; caption-side:top'>Your Past Responses</caption>
                        <tr>
                            <th scope='col'></th>
                            <th scope='col' style='text-align:center'>Your Answer</th>
                        </tr>
                        <tr style='height:150px'>
                            <th scope='row'>Little interest or pleasure in doing things</th>
                            <td style='text-align:center'>$interest</td>
                        </tr>
                        <tr style='height:150px'>
                            <th scope='row'>Feeling down, depressed, or hopeless</th>
                            <td style='text-align:center'>$feeling</td>
                        </tr>
                        <tr style='height:150px'>
                            <th scope='row'>Trouble falling or staying asleep, or sleeping too much &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </th>
                            <td style='text-align:center'>$sleep</td>
                        </tr>
                        <tr style='height:150px'>
                            <th scope='row'>Feeling tired or having little energy &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </th>
                            <td style='text-align:center'>$energy</td>
                        </tr>
                        <tr style='height:150px'>
                            <th scope='row'>Poor appetite or overeating &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </th>
                            <td style='text-align:center'>$appetite</td>
                        </tr>
                        <tr style='height:150px'>
                            <th scope='row'>Feeling bad about yourself — or that you are a failure or have let yourself or your family down &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </th>
                            <td style='text-align:center'>$esteem</td>
                        </tr>
                        <tr style='height:150px'>
                            <th scope='row'>Trouble concentrating on things, such as reading the newspaper or watching television &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </th>
                            <td style='text-align:center'>$concentration</td>
                        </tr>
                        <tr style='height:150px'>
                            <th scope='row' style='width:70%'>Moving or speaking so slowly that other people could have noticed? Or the opposite — being so fidgety or restless that you have been moving around a lot more than usual &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </th>
                            <td style='text-align:center'>$slowness</td>
                        </tr>
                        <tr style='height:150px'>
                            <th scope='row'>Thoughts that you would be better off dead or of hurting yourself in some way &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </th>
                            <td style='text-align:center'>$thoughts</td>
                        </tr>
                        <tr style='height:150px'>
                            <th scope='row'>If you checked off any problems, how difficult have these problems made it for you to do your work, take care of things at home, or get along with other people? &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </th>
                            <td style='text-align:center'>$difficulty</td>
                        </tr>
                        </table>
                        
                    </div>
                </div>";
            }
        
        
        ?>
    
       
    <?php 

        // echo "<table border='1'>
        // <tr>
        // <th>Date</th>
        // <th>Interest</th>
        // </tr>";

        // while($user_info)
        // {
        // echo "<tr>";
        // echo "<td>" . $user_info['date'] . "</td>";
        // // echo "<td>" . $user_info['interest'] . "</td>";
        // echo "<tr>";
        // }
        // echo "</table>";

    ?> 
    
    <!-- Footer -->
    <footer class="page-footer font-small text-dark">

        <!-- Footer Links -->
        <!-- <div class="container text-center text-md-left"> -->

        <!-- Grid row -->
        <!-- <div class="row"> -->

            <!-- Grid column -->
            <!-- <div class="col-md-3 mx-auto"> -->

            <!-- Links -->
            <!-- <h5 class="font-weight-bold text-uppercase mt-3 mb-4">HelpLine</h5>

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
         -->

        <!-- </div> -->
        <!-- Grid row -->

        <!-- Footer Elements -->
        <div class="container">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4" >

                    

                    <ul class="list-unstyled" style="padding-top: 200px; font-size: 30px" >
                    <p>HELPLINE</p>
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
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <section class="my-4">
                        <div>
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
                
                    </section>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            </div>
            <!-- Footer Elements -->
      
        </div>
      
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    

   

</body>
</html>