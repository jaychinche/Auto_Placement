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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Link W3.CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Your custom CSS -->
    <link rel="stylesheet" href="mystyle.css">
</head>

<body>


<?php

            $name=$_SESSION["name"];
            $pass=$_SESSION["pass"];
          $query="select * from login_data where UserName='$name' ";

          $result=mysqli_query($connection,$query);
          $count=mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
   } ?>






    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a href="index.html" class="w3-bar-item w3-button w3-wide">AutoPlacement</a>
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
                <a href="index1.php" class="w3-bar-item w3-button">ABOUT</a>
                <a href="index.php" class="w3-bar-item w3-button">View Jobs</a>
                <a href="edit_profile.php" class="w3-bar-item w3-button">Edit Profile</a>
                <a href="logout.php" class="w3-bar-item w3-button">Log out</a>

            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
                onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <!-- Navbar End -->
<br>
    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row myleftside">
            <div class="col-md-4">
                <!-- Sidebar Content -->
                <div class="card text-center sidebar">
                    <div class="card-body">
                        <img src="profile.png" alt="Avatar" class="avatar">
                        <div class="mt-3 mycard">
                            <h3></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <!-- Main Content -->
                <div class="card mb-3 content">
                    <h1 class="m-3 pt-3">About</h1>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Full Name</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                            <?php echo $data['Name']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Email</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                            <?php echo $data['UserName']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Phone</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                            <?php echo $data['Mobile']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>CGPA</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                8.7 Last Sem
                            </div>
                        </div>
                        <!-- Add more details here -->
                    </div>
                </div>
                <div class="card mb-3 content">
                    <h1 class="m-3">Recent Projects</h1>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <h5></h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                E- Transcript Generator <br>
                                training and Placement management System
                            </div>
                        </div>
                        <!-- Add more project details here -->
                    </div>
                </div>
            </div>
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
        <p>Made by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank"
                class="w3-hover-text-green">Bug Bashars</a></p>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
