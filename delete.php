<?php
$id = $_GET['id'];
$con = mysqli_connect("localhost","root","","pdf");
$sql = "DELETE FROM `insertpdf` WHERE `id`='$id'";
$result = mysqli_query($con, $sql);
if($result)
{
    header("location: pdf.php");
}

?>