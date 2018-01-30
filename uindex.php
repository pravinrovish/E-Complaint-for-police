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
   <!--  <input type="submit" value="Admin" name="submit" onclick="window.open('http://localhost/E-Complaint/conn.php').style.display='block'" class="w3-button w3-black"<br> -->
    <p><button onclick="document.getElementById('Login').style.display='block'" class="w3-button w3-black">Login</button></p>
    <p><button onclick="document.getElementById('Signup').style.display='block'" class="w3-button w3-black">Signup</button></p>
<!-- <p><button onclick="document.getElementById('Admin').style.display='block'" class="w3-button w3-black">Admin</button></p> -->
<input type="submit" value="Admin" name="submit" onclick="window.open('http://localhost/E-Complaint/conn.php').style.display='block'" class="w3-button w3-black"<br>
  
</div>
    <div class="w3-display-bottomleft w3-container">
    <p class="w3-xlarge">E-Complaint Management</p>
    <p class="w3-large">Saravanampatti, Coimbatore</p>
    <p>powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Kgcas</a></p>
  </div>
</div>

<!-- Menu Modal -->
<div id="Login" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('Login').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
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
$query = mysql_query("SELECT * FROM user where fname = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());
 $row = mysql_fetch_array($query) or die(mysql_error());
 if(!empty($row['fname']) AND !empty($row['pass'])) 
{
 $_SESSION['fname'] = $row['pass']; 
echo '<script type="text/javascript">alert("success")</script>';
 header("location:ucustomer.php");
 }
 
}  
 
}
if(isset($_POST['submit'])) 
{
 SignIn(); 
} 
?> 
<center>
 <div id="Sign-In">


<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<h1>Login</h1>
<label>User Name</label>
<input type="text" name="user" id="user"><br><br>
<label>Password</label>
<input type="password" name="pass" id="pass"><br><br>
<input id="button" onclick="w3_close()" class="w3-button w3-block w3-red w3-section w3-padding" type="submit" name="submit" value="Login">
<a href="uindex.php">Signup</a></center><br><br>
 </form>
</center>

  </div>
</div>
</div>
</div>
<!-- Contact Modal -->
<div id="Signup" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('Signup').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
<div id="new-div">
<center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h1>Sign-up</h1>
<label>First Name</label>
<input type="text" name="username"><br><br>
<label>Middle Name</label>
<input type="text" name="middlename"><br><br>
<label>Last Name</label>
<input type="text" name="lastname"><br><br>
<label>Date of Birth</label>
<input type="date" name="dob"><br><br>
<label>Mobile Number</label>
<input type="text" name="mobilenumber"><br><br>
<label>Email-Id</label>
<input type="text" name="email"><br><br>
<label>New Password</label>
<input type="text" name="password"><br><br>
<label>Confirm Password</label>
<input type="text" name="repassword"><br><br>
<input type="submit" onclick="w3_close()" class="w3-button w3-block w3-green w3-section w3-padding" value="Submit" name="submit"/>
</form>
</center>
<?php
if(isset($_POST['submit']))
{
$fn=$_POST['username'];
$mn=$_POST['middlename'];
$ln=$_POST['lastname'];
$date=$_POST['dob'];
$phno=$_POST['mobilenumber'];
$email=$_POST['email'];
$pass=$_POST['password'];
mysql_connect('localhost','root','') or die("Cound not Connect");
mysql_select_db("e-complaint") or die("not create");
mysql_query("select * from user");
if($_POST['submit']=="Submit")
{

mysql_query("insert into user(fname,mname,lname,date,phno,email,pass) values('".$fn."','".$mn."','".$ln."','".$date."','".$phno."','".$email."','".$pass."')") or die("Values Cannot be inserted");
echo '<script type="text/javascript">alert("Data Inserted")</script>';
}
}
?>

    </div>
  </div>
</div>
</div>

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
 */ function Sign()
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
 Sign(); 
} 
?> 
<div id="Sign">
<center>
<h1>Admin</h1>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<label>User Name</label>
<input type="text" name="user" id="pass"><br><br>
<label>Password</label>
<input type="password" name="pass" id="pass"><br><br>
<input id="button" type="submit" name="submit" value="Log-In">
<input id="button" onclick="w3_close()" class="w3-button w3-block w3-blue w3-section w3-padding" type="submit" name="submit" value="Login">
</center>
</form>

  </div>
</div>
</div>
</div>
</body>
</html>