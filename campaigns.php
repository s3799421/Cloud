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
<div class="col-lg-6">
                <img class="img-fluid rounded" src="images/blood4.jpg" alt="">
            </div>
        
        <div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Why do we  Campaigns?</h1>
      <h5 class="w3-padding-32">To make sure there is the right blood available for patients throughout the year. We run various campaigns to find the 135,000 new donors we need each year and encourage them to carry on donating.</h5>

      <h3>People with sickle cell share their experiences by talking directly to the disease.</h3>
      <iframe width="420" height="345" src="https://www.youtube.com/embed/nVO0kiFBxEU">
</iframe>
<div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>
</div>
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



