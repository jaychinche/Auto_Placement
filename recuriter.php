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
<title>Recruiter's Job Posting Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
    }
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    input[type="number"],
    textarea,
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    textarea {
        height: 100px;
    }
    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 12px 20px;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    .head
    {
        background-color: #007bff;
        height: 50px;
        text-align: center;
        padding-block: 10px;
        color: #fff;
    }
</style>
</head>
<body>

<div class="container">
    <h2 class="head">Recruiter's Job Posting Template</h2>
    <form action="recuriterdata.php" enctype="multipart/form-data"  method="POST">
        <label for="job_title">Job Title:</label>
        <input type="text" id="job_title" name="job_title" required>

        <label for="company_name">Company Name:</label>
        <input type="text" id="company_name" name="company_name" required>

        <label for="job_description">Job Description:</label>
        <textarea id="job_description" name="job_description" required></textarea>

        <label for="job_location">Job Location:</label>
        <input type="text" id="job_location" name="job_location" required>

        <label for="job_Role">Job Role:</label>
        <input type="text" id="job_Role" name="job_Role" required>

        <label for="criteria">Criteria:</label>
        <textarea id="criteria" name="criteria" required></textarea>

        <label for="cgpa">CGPA (if applicable):</label>
        <input type="number" id="cgpa" name="cgpa" min="0" max="10" step="1">

        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" min="0" step="1000" required>

        <label for="contact_email">Contact Email:</label>
        <input type="email" id="contact_email" name="contact_email" required>

        <button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button>
    </form>
</div>

</body>
</html>
