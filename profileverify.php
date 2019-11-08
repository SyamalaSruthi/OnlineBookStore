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
  $email = trim($_POST['email']);
		$address = trim($_POST['address']);
    $city = trim($_POST['city']);
    $zipcode = trim($_POST['zipcode']);
    $state = trim($_POST['state']);
    $country = trim($_POST['country']);
	//echo $pass;
	if($name == "" || $email == ""){
		echo "Name or email is empty!";
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

	// get from db $query = "INSERT into users(name,pass,email,address,zipcode,city,state,country) values('" . $name . "','" . $pass . "','" . $email . "','" . $address . "','" . $zipcode . "','" . $city . "','" . $state . "','" . $country . "')";
  $query = "Update users set email='" . $email . "', address='" . $address . "',zipcode='" . $zipcode. "',city='" . $city . "',state='" . $state . "',country='" . $country . "' where name='" . $name. "' " ;
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Empty data " . mysqli_error($conn);
		exit;
	}
//	$row = mysqli_fetch_assoc($result);

/*	if($name != $row['name'] && $pass != $row['pass']){
		echo "Name or pass is wrong. Check again!";
		$_SESSION['admin'] = false;
		exit;
	}*/

	if(isset($conn)) {mysqli_close($conn);}
	$_SESSION['admin'] = true;
	header("Location: books.php");
?>
