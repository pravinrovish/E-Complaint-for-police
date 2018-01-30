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
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

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
<div class="w3-row" id="myGrid" style="margin-bottom:128px">
  <div class="w3-third">
    <img src="https://wallpaperscraft.com/image/police_guns_gun_knife_defense_11160_602x339.jpg" style="width:100%">
    <img src="http://www.top4themes.com/data/out/110/6320586-police-wallpapers.jpeg" style="width:100%">
    <img src="http://ak3.picdn.net/shutterstock/videos/7293463/thumb/1.jpg" style="width:100%">
    <img src="http://tribkcpq.files.wordpress.com/2013/09/fatal-car-crash-09-12-13.jpg" style="width:100%">
    <img src="http://longwallpapers.com/Desktop-Wallpaper/police-wallpapers-mobile-For-Desktop-Wallpaper.jpg" style="width:100%">
    <img src="http://longwallpapers.com/Desktop-Wallpaper/police-wallpaper-full-hd-For-Desktop-Wallpaper.jpg" style="width:100%">
  </div>

  <div class="w3-third">
    <img src="http://longwallpapers.com/Desktop-Wallpaper/police-wallpapers-hd-resolution-For-Desktop-Wallpaper.jpg" style="width:100%">
    <img src="https://images4.alphacoders.com/125/125664.jpg" style="width:100%">
    <img src="http://wallportal.com/uploads/posts/police-swat-wallpaper/police_swat_wallpaper_019.jpg" style="width:100%">
    <img src="http://kb4images.com/images/police-wallpaper/36387736-police-wallpaper.jpg" style="width:100%">
    <img src="https://wallpaperscraft.com/image/need_for_speed_run_machine_police_mountain_speed_36371_3840x2160.jpg" style="width:100%">
    <img src="https://ak3.picdn.net/shutterstock/videos/18146413/thumb/1.jpg" style="width:100%">
  </div>

  <div class="w3-third">
    <img src="http://media.graytvinc.com/images/Police+Badge9.jpg" style="width:100%">
    <img src="http://wallportal.com/uploads/posts/police-swat-wallpaper/police_swat_wallpaper_025.jpg" style="width:100%">
    <img src="https://ak8.picdn.net/shutterstock/videos/18737498/thumb/1.jpg" style="width:100%">
    <img src="https://ak1.picdn.net/shutterstock/videos/1271431/thumb/1.jpg?i10c=img.resize(height:160)" style="width:100%">
    <img src="https://wallpaperscraft.com/image/deus_ex_adam_jensen_police_shooting_robot_19833_3840x2400.jpg" style="width:100%">
    <img src="http://getwallpapers.com/wallpaper/full/f/f/6/126361.jpg" style="width:100%">
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
