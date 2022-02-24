<?php
/*session_start();
require_once('config.php');
include "test.php";

$username = $_POST['username'];
$password = $_POST['password'];



$sql = "SELECT * FROM users WHERE email = ? AND password = ?  LIMIT 1";
$stmtselect  = $db -> prepare($sql);
$result = $stmtselect-> execute([$username, $password]);



if($result){
	$user = $stmtselect-> fetch(PDO::FETCH_ASSOC);
	if($stmtselect-> rowCount() > 0){

		$_SESSION['userlogin'] = $user;
		($_SESSION['user_id'] = $user;

		echo 'You are logged in!';
	}else{
		echo 'There no user for that combo';		
	}
}else{
	echo 'There were errors while connecting to database.';
}
*/
// ?>

// <?php 
// session_start(); 
// include 'config.php';

// function function_alert($message) {
      
//     // Display the alert box 
//     echo "<script>alert('$message');</script>";
// }


// function goback()
// { 
// 	header("refresh:0; url=login.php");
// 	exit;
// }

// if (isset($_POST['email']) && isset($_POST['password'])) {

// 	function validate($data){
//        $data = trim($data);
// 	   $data = stripslashes($data);
// 	   $data = htmlspecialchars($data);
// 	   return $data;
// 	}

// 	$email = validate($_POST['email']);
// 	$pass = validate($_POST['password']);

// 	$_SESSION["status"]=false;
// 	// $_SESSION["adminstatus"]=false;

// 	if (empty($email)) {
// 		function_alert("Email is required");
// 		goback();
// 	}else if(empty($pass)){
// 		function_alert("Password is required");
// 		goback();
// 	}else {

// 		$pass = sha1($pass);
// 		// $passhash = "SELECT COUNT(*) FROM users WHERE password = '$pass_encrypted";
// 		$sql = "SELECT * FROM users WHERE email ='$email' AND password = '$pass'";
// 		$result = mysqli_query($conn, $sql);

// 		if (mysqli_num_rows($result) === 1) {
// 			$row = mysqli_fetch_assoc($result);
//             if ($row['email'] === $email && $row['password'] === $pass) {
//             	$_SESSION['email'] = $row['email'];
//             	$_SESSION['id'] = $row['id'];
// 				$_SESSION["status"] = true;

// 				function_alert($_SESSION['id']);
//             	// header("Location: index.php");
// 		        exit();
//             }else{
// 				// header("Incorect User name or password");
// 				function_alert("hello");
// 				goback();
// 			}
// 		}
// 		else{
// 			// header("Incorect User name or password");
// 			function_alert("Incorect User name or password");
// 			goback();
// 		}
// 	}
	
// }else{
// 	goback();
// }
?>

<?php 

session_start();

	include("config.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];
		$_SESSION['status'] = false;

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//read from database
			$query = "select * from users where email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
					    $_SESSION['status'] = true;
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>