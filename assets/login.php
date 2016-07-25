<?php 
#USER LOGIN
if(isset($_POST['login'])){
$username = mysqli_real_escape_string($mysqli,$_POST['username']);
$password = mysqli_real_escape_string($mysqli,$_POST['password']);

$query    = $mysqli->query("SELECT * FROM user_tbl WHERE Username = '$username'");
if($query->num_rows > 0){
   $query1 = $mysqli->query("SELECT * FROM user_tbl WHERE Password = '$password'");

	if($query1->num_rows > 0){
			session_start();
			$_SESSION['uname'] = $username;
		    echo 'success';
		} else{
			echo 'Incorrect Password!';
		}
	} else{
		echo 'Incorrect Username!';
	}
}
?>