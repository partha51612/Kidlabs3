<?php
include("connection.php");

$email = $_POST['email'];
$password = $_POST['password'];
$result=mysqli_query( $conn, "SELECT password,email FROM admin WHERE email='$email' AND password='$password' ")
 or die("Could not execute query: " .mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
if(!$row) {
die("<script>alert('Invalid email or password')</script>".header('refresh:0;url=admin.php'));
		}
else {
	header('refresh:0;url=adminview.php');
	}
?>
