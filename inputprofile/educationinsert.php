 <?php  
	include('../includes/auth.php');
	include('../includes/db.php');
 $number = count($_POST["name"]);   
 if($number > 0)  
 {  	 $reg =$_SESSION["username"];
	  mysqli_query($con,"DELETE FROM education WHERE reg_no = '$reg'");
      for($i=0; $i<$number; $i++)  
      {  
         if(trim($_POST["name"][$i] != '') && trim($_POST["branch"][$i] != ''))  
           {  

				$sname  = mysqli_real_escape_string($con, $_POST["name"][$i]);
				$sboard  = mysqli_real_escape_string($con, $_POST["board"][$i]);
				$sbranch  = mysqli_real_escape_string($con, $_POST["branch"][$i]);
				$scity  = mysqli_real_escape_string($con, $_POST["city"][$i]);
               $sin  = mysqli_real_escape_string($con, $_POST["in"][$i]);
		      $syear  = mysqli_real_escape_string($con, $_POST["year"][$i]);
				$sql = "INSERT INTO education(reg_no,institute_name,institute_board,branch,institute_address,joined_year,end_year) VALUES('".$reg."','".$sname."','".$sboard."','".$sbranch."','".$scity."','".$sin."','".$syear."')";  
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