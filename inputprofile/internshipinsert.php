 <?php  
	include('../includes/auth.php');

	include('../includes/db.php');
 $number = count($_POST["name"]);
 if($number > 0)  
 {  
	 $reg =$_SESSION["username"];
	 mysqli_query($con,"DELETE FROM internships WHERE reg_no = '$reg'");
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != '') && trim($_POST["num"][$i] != ''))  
           {  
                
                $sname  = mysqli_real_escape_string($con, $_POST["name"][$i]);
				$snum  = mysqli_real_escape_string($con, $_POST["num"][$i]);
               	$send  = mysqli_real_escape_string($con, $_POST["end"][$i]);
				$sql = "INSERT INTO internships(reg_no,recuitor,istart,iend) VALUES('".$reg."','".$sname."','".$snum."','".$send."')";  
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