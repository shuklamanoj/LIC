<?php
    session_start();
    include('connection.php');
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
    $username=$_POST['username'];
    $password=$_POST['password'];
$con=mysqli_connect("localhost","root","","simple_login");
$check="SELECT * FROM member WHERE username = '$_POST[username]'";
$rs = mysqli_query($con,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] < 1) {
  mysql_query("INSERT INTO member(fname, lname, contact, username, password)VALUES('$fname', '$lname', '$contact', '$username', '$password')");
	header("location: login.php");
	}
	else{
    header("location: login.php");
	}	
 mysql_close($con);
    ?>
