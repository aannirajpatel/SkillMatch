 <?php  
	include('../includes/auth.php');

include('../includes/db.php'); 
 $number = count($_POST["name"]);
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != '') && trim($_POST["num"][$i] != ''))  
           {  
                $reg =$_SESSION["username"];
				$sname  = mysqli_real_escape_string($con, $_POST["name"][$i]);
				$snum  = mysqli_real_escape_string($con, $_POST["num"][$i]);
		
				$sql = "INSERT INTO languages(reg_no,language_name,lang_level) VALUES('".$reg."','".$sname."','".$snum."')";  
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