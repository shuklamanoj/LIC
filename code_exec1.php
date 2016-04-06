<!DOCTYPE html>
<html lang="en">
<head>
  <title>LIC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="W3.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="delete1.css">
  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="slider2.css">
  
</head>
<style>
.res
{
background-color:#CC99FF;
border-radius:50px;
position:relative;
}
a {
    text-decoration: none;
}
a:link, a:visited {
    color: blue;
}
a:hover {
    color: red;
}
</style>
<body style="background-color:#FFEEDC; ">

  <div style="background-color:black; height:162px;">
    <center><h1 style="color:blue";>Your welfare is our responsibility<h1>
    <h1><a href="INDEX2.html"><img src="LOGO1.JPG" alt=""></a></h1></center>
  </div>
  <div style="background-color:yellow;">
  <marquee><h style="color:red";><b>FOR AGENT'S PERSONAL USE</b><h></marquee>
  </div>
  
   <div style="background-color:black;">
  <center>
  <div style="background-color:black; height:63px;">
  <div class="bd" align="center"><body bgcolor="#6666FF" >
  <TABLE id="li" WIDTH=700 HEIGHT=100 >
  <TR>
  <TD><div class="dropdown">
      <button><IMG SRC="home1.jpg"></button>
      <ul class="dropdown-menu" >
        <li><a href="INDEX2.HTML">HOME</a></li>
      </ul>
      </div></td>
  <TD><div class="dropdown" align="center">
      <button><IMG SRC="getdetails.jpg"></button>
      <ul class="dropdown-menu" >
        <li><a href="pd.HTML">Details of Policies</a></li>
        <li><a href="pdn.HTML">Detail of all premiums by policy no.</a></li>
      </ul>
      </div></td>
  <TD><div class="dropdown">
      <button><IMG SRC="update.jpg"></button>
      <ul class="dropdown-menu">
        <li><a href="UP.HTML">Update Premium status</a></li>
      </ul>
      </div></td>
  </TR>
  </TABLE>
  </div>
  </div>
  </div>
  </center>
  </div>
  <HR>
  <br><BR>
  <div style="background-color:BLACK;">
  <center><h style="color:ORANGE";><b>LIFE INSUARANCE PLAN</b><h></center>
  </div>

  <!CODE_EXEC1.PHP>
  <div align="center" class="res"><div class="w3-card-12 w3-BLUE" id="card">
<?php
    session_start();
    include('connection.php');
    $pn=$_POST['pn'];
	$con=mysqli_connect("localhost","root","","pdo_ret");
	//error_reporting(E_ALL ^ E_WARNING);
	error_reporting(0);
	$check1="SELECT * FROM mnnm WHERE id = '$_POST[pn]'";
$rs1 = mysqli_query($con,$check1);
$data = mysqli_fetch_array($rs1, MYSQLI_NUM);
if($data[0] > 0) {
	$check="SELECT amt,mode,dt,rem FROM `data` WHERE `pn` ='$_POST[pn]' ";
 $rs = mysql_query($check);
echo
" Followings are the details for the Policy No. :{$pn}  <br> ".
"**********************************************************************************************************************<br>";
	while($row = mysql_fetch_array($rs,MYSQL_ASSOC)) {
 echo    
         "Amount     : {$row['amt']} <br> ".
         "Mode       : {$row['mode']} <br> ".
         "Date       : {$row['dt']} <br> ".
		 "Remarks    : {$row['rem']} <br> ".
		 "--------------------------------<br>";
	  }
	  }
	  else{
	  echo 
	  "NO SUCH POLICY NO" ;
	  }
 mysqli_close($con);
    ?>
	<br>
	<hr>
	<button style="background-color:orange;width:200;height:50" onclick="window.location='INDEX2.HTML';">
	<IMG SRC="BACK.JPG"></button><br>
	<br></div><DIV><br>

  
  
  
  <!slider>
<div class="img" style="background-color:white;">
<marquee>
<div class="desc"><div class="w3-card-12 w3-yellow" id="card">
<img src="slide2.jpg" alt="Klematis" width="300" height="300">
</div></div></marquee>
<CENTER><div class="desc"><div class="w3-card-12 w3-blue" id="card">
      <CENTER><h>JEEVAN RAKSHAK</h>
	 </DIV> </div></CENTER>
</div>
<div class="img" style="background-color:white;">
<marquee>
<div class="desc"><div class="w3-card-12 w3-yellow" id="card">
<img src="slide3.jpg" alt="Klematis" width="300" height="300">
<div></div></marquee>
<CENTER><div class="desc"><div class="w3-card-12 w3-blue" id="card">
      <H>HEALTH INSUARANCE</H>
	 </DIV> </div></CENTER>
</div>
<div class="img" style="background-color:white;">
<marquee>
<div class="desc"><div class="w3-card-12 w3-yellow" id="card">
<img src="slide4.jpg" alt="Klematis" width="300" height="300">
</div></div></marquee>
<CENTER><div class="desc"><div class="w3-card-12 w3-blue" id="card">
      <H>CHILDREN'S PLAN</H>
	 </DIV> </div></CENTER>
</div>
<div class="img" style="background-color:white;">
<marquee>
<div class="desc"><div class="w3-card-12 w3-yellow" id="card">
<img src="slide6.jpg" alt="Klematis" width="300" height="300">
</div></div></marquee>
<CENTER><div class="desc"><div class="w3-card-12 w3-blue" id="card">
      <H>FAMILY MEDICLAME</H>
	 </DIV> </div></CENTER>
</div>



<div style="background-color:yellow;">
  <marquee><h style="color:red";><b>ALL RIGHTS ARE RESERVED || DESIGNED BY MRP || (FOR AGENTS ONLY)</b><h></marquee>
  </div>

</body>
</html>