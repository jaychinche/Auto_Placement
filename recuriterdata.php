<?php
   include('db.php');
  ?>

<?php
if(isset($_POST['submit']))
{
	if(!empty($_POST['job_title']) && !empty ($_POST['company_name'])
     && !empty($_POST['job_description'])&& !empty ($_POST['job_location']) 
    && !empty($_POST['job_Role'])&& !empty ($_POST['criteria'])&& !empty ($_POST['cgpa']) 
    && !empty ($_POST['salary'])&& !empty ($_POST['contact_email']))
    {
		$name = $_POST['job_title'];
		$num = $_POST['company_name'];
		$parent = $_POST['job_description'];
		$parentnum = $_POST['job_location'];
		$email = $_POST['job_Role'];
		$Add = $_POST['criteria'];
        $college = $_POST['cgpa'];
		$year = $_POST['salary'];
		$branch = $_POST['contact_email'];

		$query="insert into recuriter_data(JobTitle,Company_Name,Job_des,location,Role,criteria,CGPA,Salary,ContactEmail) 
		values('$name','$num','$parent','$parentnum','$email','$Add','$college','$year','$branch')";
           
        $run=mysqli_query($connection ,$query) or die(mysqli_error());
		if($run){
     
            echo "<script>alert('Registered Succesfully')</script>";

            header("location:index.php");
		}
		else
		{
			echo "Cannot Inserted record" ;
		}

	
        }
   
    }
;?>