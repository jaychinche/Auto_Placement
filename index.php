<?php
include("nav.php");
include("db.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Auto Placement</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="mystyle.css"> -->
</head>
<body>

<!-- Team Section -->


<div class="w3-container" style="padding:128px 16px" id="team">
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <!-- <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
          <h3>John Doe</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block">View Details</Details></button></p>
        </div>
      </div>
    </div> -->
    <?php
          $query="select * from recuriter_data ";

          $result=mysqli_query($connection,$query);
          $count=mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
        $sn=1;
        while($data = mysqli_fetch_assoc($result)){
          ?>
   
   <form action="apply.php" methode="post">
     <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
          <h3><?php echo $data['JobTitle']; ?></h3>
          <p class="w3-opacity"><?php echo $data['Company_Name']; ?></p>
          <p><?php echo $data['Job_des']; ?></p>

          <p><button  type="submit" name="submit" class="w3-button w3-light-grey w3-block" ></i> Apply</button></p>
          
        </form>
        </div>
      </div>
    </div>
    <?php
        $sn++;}} else { 
          echo "No Data Found";
   } ?>
  </div>
</div>

<!-- End Team section  -->


<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
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
// // Modal Image Gallery
// function onClick(element) {
//   document.getElementById("img01").src = element.src;
//   document.getElementById("modal01").style.display = "block";
//   var captionText = document.getElementById("caption");
//   captionText.innerHTML = element.alt;
// }


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




