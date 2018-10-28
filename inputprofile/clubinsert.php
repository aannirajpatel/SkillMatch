 <?php  
	include('../includes/auth.php');
	include('../includes/db.php');
include('../includes/db.php'); 
 $number = count($_POST["name"]);
 if($number > 0)  
 {  
	 $reg =$_SESSION["username"];
	  mysqli_query($con,"DELETE FROM clubs WHERE reg_no = '$reg'");
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           {  
                
                $sname  = mysqli_real_escape_string($con, $_POST["name"][$i]);
				      
				$sql = "INSERT INTO clubs(reg_no,club_name) VALUES('".$reg."','".$sname."')";  
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