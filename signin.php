<?php
$user="root";
$db="placement";
$pass="";
$connection=mysqli_connect('localhost',$user,$pass,$db);

if(isset($_POST['submit']))
{
	if(!empty($_POST['firstname']) && !empty ($_POST['mobile']) && !empty ($_POST['Roomno']) && !empty($_POST['compaintname']))
    {
		$name = $_POST['firstname'];
		$Room = $_POST['mobile'];
		$complaint = $_POST['compaintname'];
		
        $email1=$_POST['Roomno'];
	

		$query="insert into login_data(Name,Mobile,UserName,Password) values('$name','$Room','$email1','$complaint')";
        $run=mysqli_query($connection ,$query) or die(mysqli_error());

		if($run){
     
            header("location:login.php");
		}
		else
		{
			echo "Cannot Inserted record" ;
		}

	
        }
   
    }
    else{
        echo "nothing";
    }
    




;?>