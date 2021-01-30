<!DOCTYPE html>
<html>
<title>Blood Bank System</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="home.php" class="w3-bar-item w3-button w3-wide"><i class="fa fa-home"></i>Home</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="about.php" class="w3-bar-item w3-button"><i class="fa fa-info-circle"></i> About</a>
      <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Admin Login</a>
      <a href="user.php" class="w3-bar-item w3-button"><i class="fa fa-user-o"></i> User</a>
      <a href="campaigns.php" class="w3-bar-item w3-button"><i class="fa fa-globe"></i> Campaigns</a>
      <a href="contact.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Contact Us</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
  
 
  
  <!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="https://bbspictures.s3-ap-southeast-2.amazonaws.com/blood1.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Register">Register</button>
  </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      
	  <form>
	  <h4>Register</h4>
      
    </header>
    <div class="w3-container">
      <p>Please fill in this form to register.</p>
      <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>
<hr>
    <label for="gender"><b>Gender</b></label>
    <input type="text" placeholder="Enter Gender" name="gender" id="gender" required>
<hr>
    <label for="dob"><b>Date of Birth</b></label>
    <input type="date" placeholder="DOB" name="dob" id="dob" required>
	<hr>
	<label for="type"><b>Blood Type</b></label>
    <input type="text" placeholder="Blood Type" name="type" id="type" required>
	<hr>
	<label for="no"><b>Phone No.</b></label>
    <input type="number_format" placeholder="Phone No." name="no" id="no" required>
	<hr>
	<label for="address"><b>Address</b></label>
    <input type="text" placeholder="Address" name="address" id="address" required>
    <hr>
	<button type="submit" class="registerbtn">Register</button>
  </div>
    <div class="container signin">
    <center><p>Already have an account? <a href="login.php">Sign in</a>.</p></center>
  </div>
  </form>
    <footer class="w3-container w3-teal">
      
    </footer>
  </div>
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>Our Campaigns</h2>
<p>The need for safe blood is universal. Safe blood is critical both for treatments and urgent interventions. It can help patients suffering from life-threatening conditions live longer and with a higher quality of life and supports complex medical and surgical procedures. Blood is also vital for treating the wounded during emergencies of all kinds (natural disasters, accidents, armed conflicts, etc.) and has an essential, life-saving role in maternal and neonatal care.</p>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="https://bbspictures.s3-ap-southeast-2.amazonaws.com/banner1.jpg" alt="BBS" style="width:100%">
  <div class="w3-container">
  <h3>2020 Transfusion Medicine Forum</h3>
  <p>Thank you to all who joined us for 2020 Transfusion Medicine Forum on Saturday, February 29, 2020 at the University of California, Riverside!</p>
  <p>Each attendee received 6 CEUs, from experts in each field; continental breakfast & lunch served; networking opportunities and a fun and educational getaway in Riverside!</p>
  
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="https://bbspictures.s3-ap-southeast-2.amazonaws.com/blood2.jpg" alt="BBS" style="width:100%">
  <div class="w3-container">
  <h3>Thanks4Giving Gala</h3>
  
  <p> The first-class affair, presented by Blanke Schein Wealth Management, was attended by Coachella Valley philanthropists, business partners, dedicated blood donors, and other LifeStream supporters.</p>
  <p>Legendary two-time Grammy Award winner Rita Coolidge displayed her enduring vocal versatility while performing her many musical hits. Check out the highlights below.</p>
 
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="https://bbspictures.s3-ap-southeast-2.amazonaws.com/banner3.png" alt="BBS" style="width:100%">
  <div class="w3-container">
  <h3>Largest Blood Drive In The Inland Empire</h3>
  
  <p>About 750 units of blood were donated at the largest blood drive in the Inland Empire on Sunday, June 30, 2019 at the National Orange Show Event Center in San Bernardino.</p>
  
  </div>
  </div>
</div>

</div>

<!-- Image of location/map -->
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" >Blood Bank System</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>


</body>
</html>
