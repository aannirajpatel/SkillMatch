 <?php  
	include('../includes/auth.php');
	include('../includes/db.php');
 $number = count($_POST["name"]);
 if($number > 0)  
 {  
	 	 $reg =$_SESSION["username"];
	  mysqli_query($con,"DELETE FROM certificate WHERE reg_no = '$reg'");
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != '') && trim($_POST["num"][$i] != ''))  
           {  
				$sname  = mysqli_real_escape_string($con, $_POST["name"][$i]);
				$snum  = mysqli_real_escape_string($con, $_POST["num"][$i]);
		      $syear  = mysqli_real_escape_string($con, $_POST["year"][$i]);
				$surl  = mysqli_real_escape_string($con, $_POST["url"][$i]);
				mysqli_query($con,"DELETE FROM certificate WHERE reg_no = '$reg'");
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