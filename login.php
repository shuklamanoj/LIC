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

<style>
.box
{
background-color:#CC99FF;
height:40px;
width:1200px;
border-radius:100px;
position:relative;
}

.reg{
font-size: 100%;
background-color:pink;
border-radius:15px;

}
  </style>
</head>
<br><br>
    <?php
    //Start session
    session_start();	
    //Unset the variables stored in session
    unset($_SESSION['SESS_MEMBER_ID']);
    unset($_SESSION['SESS_FIRST_NAME']);
    unset($_SESSION['SESS_LAST_NAME']);
    ?>
	<div class="bd" align="center"><body bgcolor="#FFFFCC" ></>
<div class="box">
<div class="links">
<div  class="reg">
	<form name="loginform" action="login_exec.php" method="post">
    <table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td colspan="2">
    <!--the code bellow is used to display the message of the input validation-->
    <?php
    if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    echo '<ul class="err">';
    foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    echo '<li>',$msg,'</li>';
    }
    echo '</ul>';
    unset($_SESSION['ERRMSG_ARR']);
    }
    ?>
    </td>
    </tr>
    <tr>
    <td width="116"><div  align="right">Username</div></td>
    <td width="177"><input name="username" type="text" /></td>
    </tr>
    <tr>
    <td><div align="right">Password</div></td>
    <td><input name="password" type="text" /></td>
    </tr>
    <tr>
    <td><div align="right"></div></td>
    <td><input name="" type="submit" value="login" /></td>
    </tr>
    </table>
    </form></div>
<div style="background-color:yellow;">
  <marquee><h style="color:red";><b>ALL RIGHTS ARE RESERVED || DESIGNED BY MRP || (FOR AGENTS ONLY)</b><h></marquee>
  </div>

</body>
</html>



