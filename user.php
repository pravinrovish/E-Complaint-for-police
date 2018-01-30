<html>
<head><title>Sign-In</title> 

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
</head>

<body background="C:\wamp\www\a-horse-running-with-thunder-on-see-background.jpg">
 <div id="Sign-In">


<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
Username (or) Email <br><input type="text" name="user" id="user"size="40"><br>
 PassCode<br><input type="password" name="pass" id="pass"size="40"><br> 
<input id="button" type="submit" name="submit" value="Log-In">
 </form>

 </div>
 </body><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

 </html> 
