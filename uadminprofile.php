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
    background-image: url("https://www.desktopbackground.org/p/2013/12/11/683741_20-best-photos-of-scroll-backgrounds-template-blank-scroll-paper_1024x768_h.jpg");
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
    </div>    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

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
    
</div>
<div class="w3-container" id="admin" style="margin-top:20px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Profile</b></h1>
    
  <div>
	
  <div>
	<table border="1" width="30%">
<tr><td>Name:</td><td>Praveen.B</td></tr>
<tr><td>Id-No:</td><td>af001</td></tr>
<tr><td>Age:</td><td>28</td></tr>
<tr><td>Posting:</td><td>Sub-Inspector</td></tr>
<tr><td>Branch&Area:</td><td>Saravanampatti</td></tr>
<tr><td>Mobile Number:</td><td>9876543210</td></tr>
<tr><td>Email-id:</td><td>Praveen333@gmail.com</td></tr>
</table>
</div>
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
</html>
