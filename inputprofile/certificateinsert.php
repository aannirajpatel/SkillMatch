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
                $reg = $_SESSION["username"];
				$sname  = mysqli_real_escape_string($con, $_POST["name"][$i]);
				$snum  = mysqli_real_escape_string($con, $_POST["num"][$i]);
		      $syear  = mysqli_real_escape_string($con, $_POST["year"][$i]);
				$surl  = mysqli_real_escape_string($con, $_POST["url"][$i]);
				
				$sql = "INSERT INTO certificate(reg_no,certificate_field,issued_by,certified_year,certificate_URL) VALUES('".$reg."','".$sname."','".$snum."','".$syear."','".$surl."')";  
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