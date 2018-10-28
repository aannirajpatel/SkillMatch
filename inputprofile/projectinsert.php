 <?php  
	include('../includes/auth.php');

include('../includes/db.php'); 
 $number = count($_POST["name"]);
 if($number > 0)  
 {  	 $reg =$_SESSION["username"];
	  mysqli_query($con,"DELETE FROM projects WHERE reg_no = '$reg'");
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != '') && trim($_POST["num"][$i] != ''))  
           {  
              
				$sname  = mysqli_real_escape_string($con, $_POST["name"][$i]);
				$snum  = mysqli_real_escape_string($con, $_POST["num"][$i]);
		
				$sql = "INSERT INTO projects(reg_no,project_domain,project_title) VALUES('".$reg."','".$sname."','".$snum."')";  
                mysqli_query($con, $sql);  
           }
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?>