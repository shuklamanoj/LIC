<html>
<head>
<title>Get My Pointer</title>
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
background-color:grey;
height:40px;
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
  </style>
</head>
<div class="bd" align="center"><body bgcolor="#6666FF" ></>
<div class="box">
<h1>Get My Pointer !!!</h1>
<div class="links">
<TABLE id="li" WIDTH=700 HEIGHT=100 >
<tr>
<td><div class="dropdown">
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
        <li><a href="faq.php">FAQ's</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</div></td>
</tr>
</table>
</div> 
</div>
</div>
</body>
</html>
