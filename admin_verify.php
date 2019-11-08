<?php
	session_start();
	if(!isset($_POST['submit'])){
		echo "Something wrong! Check again!";
		exit;
	}
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$name = trim($_POST['name']);
	$pass = trim($_POST['pass']);

	if($name == "" || $pass == ""){
		echo "Name or Pass is empty!";
		exit;
	}

	$name = mysqli_real_escape_string($conn, $name);
	$pass = mysqli_real_escape_string($conn, $pass);
  $email = mysqli_real_escape_string($conn, $email);
	$address = mysqli_real_escape_string($conn, $address);
  $city = mysqli_real_escape_string($conn, $city);
  $zipcode = mysqli_real_escape_string($conn, $zipcode);
  $state = mysqli_real_escape_string($conn, $state);
  $country = mysqli_real_escape_string($conn, $country);
	//$pass = sha1($pass);

	// get from db
	$query = "SELECT name, pass from users where name='" . $name . "' and pass='" . $pass . "'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Empty data " . mysqli_error($conn);
		exit;
	}
	$row = mysqli_fetch_assoc($result);
	//echo $name;
	//echo $pass;
	if($name != $row['name'] && $pass != $row['pass']){
		echo "Name or password is wrong. Check again!";
		$_SESSION['admin'] = false;
		exit;
	}

	if(isset($conn)) {mysqli_close($conn);}
	$_SESSION['admin'] = true;
	header("Location: books.php");
?>
