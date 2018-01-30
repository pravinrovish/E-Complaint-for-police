<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("data:image/jpeg;base64,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");
    min-height: 200%;
}
.w3-bar .w3-button {
    padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top ">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="uadminpage.php" class="w3-bar-item w3-button w3-wide">Home</a>
    <!-- Right-sided navbar links -->
 <div class="w3-right w3-hide-small">
      <a href="uadminprofile.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i>Profile</a>
      <a href="ucomplaintview.php" class="w3-bar-item w3-button"><i class="fa fa-file"></i>Complaint View</a>
      <a href="ucomplaintstatus.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Complaint Status</a>
      <a href="ucaseinprogress.php" class="w3-bar-item w3-button"><i class="fa fa-refresh"></i>Case in Progress</a>
      <a href="uindex.php" class="w3-bar-item w3-button"><i class="fa fa-map-marker"></i>Logout</a>
    </div>   <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>


<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" >
  <div class="w3-display-center w3-text-white" style="padding:48px">
    <a class="w3-jumbo w3-center w3-hide-small">E-Complaint</a> <br>
    <span class="w3-large">An Police complaint Portal.</span><br>
    
<div class="w3-container w3-white w3-padding-64 w3-center " id="team">
<h2>Complaint status</h2><br><br><br><br>
	<div >
      <form class="w3-container w3-center  w3-padding w3-black "   method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      
      
        <label>Accusation</label>
        <input class="w3-input" type="text" name="Email" required>
      
      <label>FIR No</label>
      <input class="w3-input" type="text" name="fir" required>
      
      <label>Case-in-charge</label>
	  <input class="w3-input" type="text" name="charge" required>
	  <label>Case Filed on</label>
	  <center><input class="w3-input w3-center" type="date" name="filed" required></center>
	  <label>Enquired Date</label>
	  <center><input class="w3-input w3-center" type="date" name="enquire" required></center>
     
	  <br>
	  <label>Status</label>
	  <textarea name="status"></textarea>
	  <br>
	  <button href="uadminprofile.php" type="submit" class="w3-button w3-left  w3-white w3-theme">back</button>
	  <input type="submit" class="w3-button w3-right  w3-white w3-theme" value="send" name="submit">
      </form>
    </div>
  </div>


	</header>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="ucustomer.php" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Trendy</a></p>
</footer>
 
<!-- Add Google Maps -->
<script>


// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>


</body>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['Name'];
$accu=$_POST['Email'];
$fir=$_POST['fir'];
$charge=$_POST['charge'];
$filedon=$_POST['filed'];
$enquired=$_POST['enquire'];
$caseon=$_POST['case'];
$status=$_POST['status'];
mysql_connect('localhost','root','') or die("Cound not Connect");
mysql_select_db("e-complaint") or die("not create");
mysql_query("select * from cstatus");
if($_POST['submit']=="send")
{

mysql_query("insert into cstatus(name,accusation,fir,charge,filedon,enquired,caseon,status) values('".$name."','".$accu."','".$fir."','".$charge."','".$filedon."','".$enquired."','".$caseon."','".$status."')") or die("Values Cannot be inserted");
echo '<script type="text/javascript">alert("Data Inserted")</script>';
}
}
?>
</html>
