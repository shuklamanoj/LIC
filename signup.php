


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

<body style="background-color:#FFEEDC; ">

  <div style="background-color:black; height:162px;">
    <center><h1 style="color:blue";>Your welfare is our responsibility<h1>
    <h1><a href="INDEX2.html"><img src="LOGO1.JPG" alt=""></a></h1></center>
  </div>
    <div style="background-color:yellow;">
  <marquee><h style="color:red";><b>FOR AGENT'S PERSONAL USE</b><h></marquee>
  </div>
   <div style="background-color:GREEN;">
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
  <br><BR>
  <div style="background-color:BLACK;">
  <center><h style="color:ORANGE";><b>LIFE INSUARANCE PLAN</b><h></center>
  </div><BR><BR>

<div class="regi">
    <form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
    <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
    <td colspan="2">
    <div align="center">
    <?php
	error_reporting(E_ALL ^ E_NOTICE);
    $remarks=$_GET['remarks'];
    if ($remarks==null and $remarks=="")
    {
    echo 'Register Here';
    }
    if ($remarks=='success')
    {
	
    echo 'Registration Success';
    }
    ?>	
    </div></td>
    </tr>
    <tr>
    <td width="95"><div align="right">First Name:</div></td>
    <td width="171"><input type="text" name="fname" /></td>
    </tr>
    <tr>
    <td><div align="right">Last Name:</div></td>
    <td><input type="text" name="lname" /></td>
    </tr>
    <tr>
    <tr>
    <td><div align="right">Contact No.:</div></td>
    <td><input type="number" name="contact" /></td>
    </tr>
    <tr>
    <td><div align="right">Username:</div></td>
    <td><input type="text" name="username" /></td>
    </tr>
    <tr>
    <td><div align="right">Password:</div></td>
    <td><input type="password" name="password" /></td>
    </tr>
    <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Submit" /></td>
    </tr>
    </table>
    </form></div>

<div style="background-color:yellow;">
  <marquee><h style="color:red";><b>ALL RIGHTS ARE RESERVED || DESIGNED BY MRP || (FOR AGENTS ONLY)</b><h></marquee>
  </div>

</body>
</html>