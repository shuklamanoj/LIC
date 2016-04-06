<?php
    session_start();
    include('connection.php');
    $pn=$_POST['pn'];
    $amt=$_POST['amt'];
	$dt=$_POST['dt'];
    $rem=$_POST['rem'];
    $con=mysqli_connect("localhost","root","","pdo_ret");
if(isset($_POST['mode'])) {
 $mod=$_POST['mode'];
 if($mod=='Cash'){
 $mode=$mod;
 }
 else{
 $mode=$_POST['cq'];
 }
}

error_reporting(0);
	$check1="SELECT * FROM mnnm WHERE id = '$_POST[pn]'";
$rs1 = mysqli_query($con,$check1);
$data = mysqli_fetch_array($rs1, MYSQLI_NUM);
if($data[0] > 0) {
	mysql_query("INSERT INTO data(pn, amt, mode, dt, rem)VALUES('$pn', '$amt', '$mode', '$dt', '$rem')");
	echo "<script type='text/javascript'>alert('SUCCESSFULLY UPDATED');</script>" ;

	
	 }
	  else{
	  echo "<script type='text/javascript'>alert('NO SUCH POLICY NO');</script>" ;

	  	}
 mysql_close($con);

    ?>
	<button onclick="window.location.href='index2.html' "><img src="BACK.jpg"></button>