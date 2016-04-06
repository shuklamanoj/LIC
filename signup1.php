<html>
<style>
body{
}
h1{
color:red;
text-align:center;
background-color:#FFD1A3;
border-radius:100px;
}
.box
{
background-color:#CC99FF;
height:40px;
width:1200px;
border-radius:100px;
position:relative;
}
#li{
font-size: 200%;
color:#CC66FF;
background-color:#080804;
text-align:center;
border-radius:15px;
position:relative;
}
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    margin: 0;
}
.dropdown:hover .dropdown-menu {
   display: block;
}
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown .dropdown-menu {
    position: absolute;
    top: 100%;
    display: none;
    margin: 0;
list-style: none; 
    width: 100%;
    padding: 0;
}
.dropdown:hover .dropdown-menu {
    display: block;
}
.dropdown button {
    background: #FF6223;
    color: #FFFFFF;
    border: none;
    margin: 0;
    padding: 0.4em 0.8em;
    font-size: 1em;
}
.dropdown a {
    display: block;
    padding: 0.2em 0.2em;
    text-decoration: none;
    background: #CCCCCC;
    color: #333333;
}
.dropdown a:hover {
    background: #BBBBBB;
}
.regi{
font-size: 100%;
color:#CC66FF;
background-color:pink;
text-align:center;
border-radius:15px;

}
  </style>
  

    <script type="text/javascript">
    function validateForm()
    {
    var a=document.forms["reg"]["fname"].value;
    var b=document.forms["reg"]["lname"].value;
    var c=document.forms["reg"]["mname"].value;
    var d=document.forms["reg"]["address"].value;
    var e=document.forms["reg"]["contact"].value;
    var f=document.forms["reg"]["pic"].value;
    var g=document.forms["reg"]["pic"].value;
    var h=document.forms["reg"]["pic"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
    {
    alert("All Field must be filled out");
    return false;
    }
    if (a==null || a=="")
    {
    alert("First name must be filled out");
    return false;
    }
    if (b==null || b=="")
    {
    alert("Last name must be filled out");
    return false;
    }
    if (c==null || c=="")
    {
    alert("Gender name must be filled out");
    return false;
    }
    if (d==null || d=="")
    {
    alert("address must be filled out");
    return false;
    }
    if (e==null || e=="")
    {
    alert("contact must be filled out");
    return false;
    }
    if (f==null || f=="")
    {
    alert("picture must be filled out");
    return false;
    }
    if (g==null || g=="")
    {
    alert("username must be filled out");
    return false;
    }
    if (h==null || h=="")
    {
    alert("password must be filled out");
    return false;
    }
    }
    </script>
  <div class="bd" align="center"><body bgcolor="#6666FF" ></>
<div class="box">
<h1>Get My Pointer !!!</h1>
<div class="links">
<TABLE id="li" WIDTH=700 HEIGHT=100 >
<TR>
<TD><div class="dropdown">
    <button>HOME</button>
   <ul class="dropdown-menu" >
        <li><a href="index.php">HOME</a></li>
    </ul>
</div></td>
<TD><div class="dropdown" align="center">
    <button>ABOUT</button>
    <ul class="dropdown-menu" >
        <li><a href="web.php">Website</a></li>
        <li><a href="dev.php">Developers</a></li>
    </ul>
</div></td>
<TD><div class="dropdown">
    <button>LOGIN</button>
    <ul class="dropdown-menu">
        <li><a href="login.php">Sign in</a></li>
        <li><a href="signup.php">Register</a></li>
    </ul>
</div></td>
<TD><div class="dropdown">
<button>HELP</button>
<ul class="dropdown-menu" >
        <li><a href="faq.php">FAQs</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</div></td>
</tr>
</table>
</div>
</div>
</div><br><br><br><br><br><br><br>
<!from here code for registration is written>
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
    echo 'User already exists please register here again with different credentials';
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
    <td><div align="right">Gender:</div></td>
    <td><input type="text" name="mname" /></td>
    </tr>
    <tr>
    <td><div align="right">Address:</div></td>
    <td><input type="text" name="address" /></td>
    </tr>
    <tr>
    <td><div align="right">Contact No.:</div></td>
    <td><input type="text" name="contact" /></td>
    </tr>
    <tr>
    <td><div align="right">Picture:</div></td>
    <td><input type="text" name="pic" /></td>
    </tr>
    <tr>
    <td><div align="right">Username:</div></td>
    <td><input type="text" name="username" /></td>
    </tr>
    <tr>
    <td><div align="right">Password:</div></td>
    <td><input type="text" name="password" /></td>
    </tr>
    <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Submit" /></td>
    </tr>
    </table>
    </form></div></body></div></html>