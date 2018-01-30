<!DOCTYPE html>
<html>
<body>
<title>E-Complaint</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShBn_KxVRGmgxOfxFzDXSvZswnc21Ayc2XD3DTiGFuChfVqdd6');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>


<div class="bgimg w3-display-container w3-text-white">
  <div class="w3-display-middle w3-jumbo">
    <p>E-Complaint</p>
  </div>
  <div class="w3-display-topleft w3-container w3-xlarge">
    <p><button onclick="document.getElementById('Login').style.display='block'" class="w3-button w3-black">Login</button></p>
    <p><button onclick="document.getElementById('Signup').style.display='block'" class="w3-button w3-black">Signup</button></p>
 <p><button onclick="document.getElementById('Admin').style.display='block'" class="w3-button w3-black">Admin</button></p>
  </div>
    <div class="w3-display-bottomleft w3-container">
    <p class="w3-xlarge">E-Complaint Management</p>
    <p class="w3-large">Saravanampatti, Coimbatore</p>
    <p>powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Kgcas</a></p>
  </div>
</div>
<!-- Menu Modal -->
<div id="Admin" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('Admin').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>


<?php 

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'e-complaint');
 define('DB_USER','root');
 define('DB_PASSWORD','');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 /* $ID = $_POST['user'];
 $Password = $_POST['pass'];
 */ function SignIn() 

{ 
session_start(); //starting the session for user profile page 
if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
 if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
{ 
$query = mysql_query("SELECT * FROM log where user = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());
 $row = mysql_fetch_array($query) or die(mysql_error());
 if(!empty($row['user']) AND !empty($row['pass'])) 
{
 $_SESSION['user'] = $row['pass']; 
echo '<script type="text/javascript">alert("success")</script>';
 header("location:uadminpage.php");
 }
 
}  
 

}

if(isset($_POST['submit'])) 
{
 SignIn(); 
} 
?> 
</head>

<body background="C:\wamp\www\a-horse-running-with-thunder-on-see-background.jpg">
 <div id="Sign-In">


<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<h1><center>Admin</center></h1>
<center>Username  <input type="text" name="user" id="user"size="40"><br><br>
 PassCode<input type="password" name="pass" id="pass"size="40"><br> 
<input id="button" onclick="w3_close()" class="w3-button w3-block w3-red w3-section w3-padding" type="submit" name="submit" value="Log-In">
 </form>

 </div>
</div>
</div>
 </body><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

 </html> 
