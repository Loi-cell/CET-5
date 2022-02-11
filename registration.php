
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
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Your Secrets
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="past.php">Your Past</a>
            <a class="dropdown-item" href="present.php">The Present</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Related Articles</a>
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

   
    <div >
        <form class="regiform" action="register.php" method="post">
            <div class="container">
                
                <div class="py-5">
                    <div class="regform">
                        <h1>Registration</h1>
                        <p>Fill up the form with correct values.</p>
                        <hr class="mb-3">

                        <label for="name"><b>Name</b></label>
                        <input class="form-control" id="name"  type="text" name="name" required>

                        <div class="form-group">
                        <label for="gender">Gender</label>
                            <select id="gender" name="gender" class="form-control">
                                <option disabled selected value> select an option </option>
                                <option value="man">Man</option>
                                <option value="woman">Woman</option>
                                <option value="lgbt">LGBTQ+</option>
                                <option value="notsay">Prefer Not Say</option>
                            </select>
                        </div>

                        <label for="email"><b>Email Address</b></label>
                        <input class="form-control" id="email"  type="email" name="email" required>

                        <label for="password"><b>Password</b></label>
                        <input class="form-control" id="password"  type="password" name="password" required>

                        <label for="phonenumber"><b>Phone Number</b></label>
                        <input class="form-control" id="number"  type="text" name="number" required>

                        <hr class="mb-3">
                        <button type="submit" class="btn btn-success">
                            Sign Up
                        </button>
                        <!-- <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up"> -->
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript">

	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var name 	= $('name').val();
			var gender 	= $('gender').val();
			var email 		= $('#email').val();
			var number = $('#number').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {name: name,gender: gender,email: email,number: number,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

                
			}else{
				
			}

			



		});		

		
	});
	
    </script> -->

       

    <!-- Footer -->
   
    <!-- Footer -->
    <footer class="page-footer font-small text-dark">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">


            
            <div class="col-md-3 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">HelpLine</h5>

            <p>Suicide Hotline&emsp; -&ensp; 09123456790</p>
            <p>Dial-A-Friend&emsp; -&ensp; 09123456790</p>
            <p>HopeLine&emsp;&emsp;&emsp; -&ensp; 09123456790</p>
            <!-- Grid column -->

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