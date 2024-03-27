<?php
    include("nav.php");
?>
<html lang="en" >  
<head>  
  <meta charset="UTF-8">  
  <title> Create Account
 </title>  
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="mystyle.css"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
<!-- <link rel="stylesheet" href="mystyle.css"> -->
</head>  
<style>  
html {   
    height: 100%;   
}  
body {   
    height: 100%;   
}  
.global-container {  
    height: 100%;  
    display: flex;  
    align-items: center;  
    justify-content: center;  
    background-color: #f5f5f5;  
}  
form {  
    padding-top: 10px;  
    font-size: 14px;  
    margin-top: 30px;  
}  
.card-title {   
font-weight: 300;  
 }  
.btn {  
    font-size: 14px;  
    margin-top: 20px;  
}  
.login-form {   
    width: 330px;  
    margin: 20px;  
}  
.sign-up {  
    text-align: center;  
    padding: 20px 0 0;  
}  
.alert {  
    margin-bottom: -30px;  
    font-size: 13px;  
    margin-top: 20px;  
}  
</style>  
<body>  
<div class="pt-5">  
  <div class="global-container">  
    <div class="card login-form">  
    <div class="card-body">  
        <h3 class="card-title text-center">Sign up</h3>  
        <div class="card-text">  
        <form action="signin.php" enctype="multipart/form-data" method="POST">
                <div class="form-group">  
                    <label for="exampleInputEmail1">Name</label>  
                    <!-- <input type="text" name="name" class="form-control form-control-sm">  -->
                    <input type="text" id="fname" name="firstname" class="form-control form-control-sm"  required> 
                </div>  
                <div class="form-group">  
                    <label for="exampleInputPassword1">Mobile</label>  
                    <!-- <input type="number" name="mobile" class="form-control form-control-sm">  -->
                    <input type="text" id="fname" name="mobile" class="form-control form-control-sm"  required>

                </div>  


                <div class="form-group">  
                    <label for="exampleInputEmail1">Gmail</label>  
                    <!-- <input type="email" name="gmail"class="form-control form-control-sm" >   -->
                    <input type="email" id="Rno" name="Roomno" class="form-control form-control-sm" required>

                </div>

                <div class="form-group">  
                    <label for="exampleInputEmail1">Password</label>  
                    <!-- <input type="password" name="password" class="form-control form-control-sm" >   -->
                    <input type="text" id="compaint_name" name="compaintname" class="form-control form-control-sm"  required>

                </div>


                <!-- <button type="submit" name="submit" class="btn btn-primary btn-block"> Login </button>   -->
                <button class="btn btn-primary btn-block" type="submit" name="submit">Button</button>
            </form>  
        </div>  
    </div>  
</div>  
</div>  
</body>  
</html> 
 