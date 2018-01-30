<html>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h1>Sign-up</h1>
<label>First Name</label>
<input type="text" name="username" required><br><br>
<label>Middle Name</label>
<input type="text" name="middlename" required><br><br>
<label>Last Name</label>
<input type="text" name="lastname" required><br><br>
<label>Date of Birth</label>
<input type="date" name="dob" required><br><br>
<label>Mobile Number</label>
<input type="text" name="mobilenumber" required><br><br>
<label>Email-Id</label>
<input type="text" name="email" required><br><br>
<label> Password</label>
<input type="text" name="password" required><br><br>
<input type="submit" value="save" name="submit"/>
<a href="dd.php">Done</a>
</form>
</center>
</body>
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
if($_POST['submit']=="save")
{

mysql_query("insert into user(fname,mname,lname,date,phno,email,pass) values('".$fn."','".$mn."','".$ln."','".$date."','".$phno."','".$email."','".$pass."')") or die("Values Cannot be inserted");
echo '<script type="text/javascript">alert("Data Inserted")</script>';
}
}
?>
</html>

