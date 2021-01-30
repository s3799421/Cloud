<?php
include('config.php');  
 
// Escape user inputs for security
$name = mysqli_real_escape_string($db, $_REQUEST['name']);
$gender = mysqli_real_escape_string($db, $_REQUEST['gender']);
$dob = mysqli_real_escape_string($db, $_REQUEST['dob']);
$type = mysqli_real_escape_string($db, $_REQUEST['type']);
$doa = mysqli_real_escape_string($db, $_REQUEST['doa']);
$time = mysqli_real_escape_string($db, $_REQUEST['time']);
$no = mysqli_real_escape_string($db, $_REQUEST['no']);
$address = mysqli_real_escape_string($db, $_REQUEST['address']);
 
// Attempt insert query execution
$sql = "INSERT INTO Donor_Appointment (name, gender, dob, type, doa, time, no, address) VALUES ('$name', '$gender', '$dob', '$type', '$doa', '$time', '$no', '$address')";
if(mysqli_query($db, $sql)){
    echo '<a href="donor.php">Donor Appointment added successfuly.</a>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
// Close connection
mysqli_close($db);
?>
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

!-- Navbar -->
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

<div class="w3-display-container w3-animate-opacity">
  <img src="https://bbspictures.s3-ap-southeast-2.amazonaws.com/blood-donor+(1).jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
<div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Book an Appointment">Book an Appointment</button>
  </div>
  </div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <form>
	  
    <div class="w3-container">
	
      <p>Book an Appointment.</p>
      <hr>
	  </header><br>

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
	<label for="doa"><b>Date of Appointment</b></label>
    <input type="date" placeholder="DOA" name="doa" id="doa" required>
	<hr>
	<label for="time"><b>Time of Appointment</b></label>
    <input type="time" placeholder="Time" name="time" id="time" required>
	<hr>
	<label for="no"><b>Phone No.</b></label>
    <input type="number_format" placeholder="Phone No." name="no" id="no" required>
	<hr>
	<label for="address"><b>Address</b></label>
    <input type="text" placeholder="Address" name="address" id="address" required>
    <hr>
	<button type="submit" class="registerbtn">Book Apointment</button>
  </div>
</form>
    <footer class="w3-container w3-teal">
      
    </footer>
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
