 <?php  
	include('../includes/auth.php');
	include('../includes/db.php');
include('../includes/db.php'); 
 $number = count($_POST["name"]);
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           {  
                $reg =$_SESSION["username"];
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