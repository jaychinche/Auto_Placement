<?php
include("db.php");
session_start();

if($_SESSION["name"]==true){
  echo $_SESSION["name"];}
  else{
      
  header('location:login.php');  
  }
   ?>
   <a href="logout.php">Logout </a>
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit Profile</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Raleway"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="mystyle.css" />
  </head>
  <body>

    <!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
      <a href="#home" class="w3-bar-item w3-button w3-wide">AutoPlacement</a>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
      <a href="index1.php" class="w3-bar-item w3-button">ABOUT</a>
                <a href="index.php" class="w3-bar-item w3-button">View Jobs</a>
                <a href="edit_profile.php" class="w3-bar-item w3-button">Edit Profile</a>
                <a href="logout.php" class="w3-bar-item w3-button">Log out</a>
      </div>
      <!-- Hide right-floated links on small screens and replace them with a menu icon -->
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>
  <br>
    <div class="row mt-3 form-group">
      <div class="col-8 offset-2">
        <h3>Edit Profile</h3>
        <form  action="" method="POST" novalidate class="needs-validation">
          <div class="mp-3">
            <label for="title" class="form-label">Name</label>
            <input type="text" class="form-control" required />
            <div class="valid-feedback">Title looks good!</div>
            <div class="invalid-feedback">Title shold be valid</div>
          </div>

          <div class="mp-3">
            <label for="title" class="form-label">CGPA</label>
            <textarea class="form-control" required></textarea>
            <div class="invalid-feedback">Please enter short description</div>
          </div>

          <div class="mp-3">
            <label for="title" class="form-label">Project</label>
            <input type="text" class="form-control" required />
            <div class="invalid-feedback">
              Please enter valid Link for Image
            </div>
          </div>

          <div class="row">
            <div class="mp-3 col-md-4">
              <label for="title" class="form-label">Mobile</label>
              <input class="form-control" required />
              <div class="invalid-feedback">Price should be valid</div>
            </div>
            <div class="mp-3 col-md-8">
              <label for="title" class="form-label">Country</label>
              <input type="text" class="form-control" required />
              <div class="invalid-feedback">Country name should be valid</div>
            </div>
          </div>

          <div class="mp-3">
            <label for="title" class="form-label">Location</label>
            <input type="text" class="form-control" required />
            <div class="invalid-feedback">location shold be valid</div>
          </div>

          <div class="mp-3 mt-3">
            <button class="btn btn-primary">Edit</button>
          </div>
        </form>
      </div>
    </div>


    <!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Made by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Bug Bashars</a></p>
  </footer>
   
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
