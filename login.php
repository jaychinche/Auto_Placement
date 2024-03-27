<?php
include("nav.php");
include("db.php");
?>

<?php
session_start();
if($_POST)
{
    @$name=$_POST['username'];
    @$pass=$_POST['password'];
    @$query= "SELECT * from login_data where UserName = '$name' and Password='$pass'";
    @$result=mysqli_query ($connection, $query);
 if(@mysqli_num_rows ($result) ==1)
    { 
        $_SESSION["name"]=$name;
        $_SESSION["pass"]=$pass;
        header ('location:profileupdated.php');
     
  }
  else {
    echo '<script type="text/javascript">';
    echo 'alert("Incorrect ID/Password....")';
    echo '</script>';
}
}
?>



<html lang="en" >  
<head>  
  <meta charset="UTF-8">  
  <title> login-form
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
        <h3 class="card-title text-center">Sign in</h3>  
        <div class="card-text">  
        <form id='login' class='form'action=''method='post'>
        <label for="exampleInputEmail1"> Enter Email address </label>  
                        <input type='text'name="username" class="form-control form-control-sm"  placeholder='Email' required >
                        <label for="exampleInputEmail1"> Enter Password </label>  
                        <input type='password'name="password" class="form-control form-control-sm" placeholder='Enter Password' required>
                        <br> <br>
                        <button type='submit'name='subtn' class="btn btn-primary btn-block">Log in</button>
                        <br>
                        <span class="register">Don't have an account ? <a href="create.php" class="reg">Sign Up</a></span>
                 </form>
        </div>  
    </div>  
</div>  
</div>  
</body>  
</html>  