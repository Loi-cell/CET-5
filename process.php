/*<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $number = $_POST['number'];
    $email = $_POST['email'];
	$password = sha1($_POST['password']);

		$sql = "INSERT INTO users (name, number,gender, email, password) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$name, $gender, $number, $email, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were errors while saving the data.';
		}
}else{
	echo 'No data';
}*/