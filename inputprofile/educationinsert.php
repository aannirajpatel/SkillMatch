 <?php  
	include('../includes/auth.php');
 
$connect = mysqli_connect("localhost", "root", "", "skillmatch");  
 $number = count($_POST["name"]);   
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
         if(trim($_POST["name"][$i] != '') && trim($_POST["branch"][$i] != ''))  
           {  
                $reg = $_SESSION["username"];
				$sname  = mysqli_real_escape_string($connect, $_POST["name"][$i]);
				$sboard  = mysqli_real_escape_string($connect, $_POST["board"][$i]);
				$sbranch  = mysqli_real_escape_string($connect, $_POST["branch"][$i]);
				$scity  = mysqli_real_escape_string($connect, $_POST["city"][$i]);
               $sin  = mysqli_real_escape_string($connect, $_POST["in"][$i]);
		      $syear  = mysqli_real_escape_string($connect, $_POST["year"][$i]);
				
				$sql = "INSERT INTO education(reg_no,institute_name,institute_board,branch,institute_address,joined_year,end_year) VALUES('".$reg."','".$sname."','".$sboard."','".$sbranch."','".$scity."','".$sin."','".$syear."')";  
                mysqli_query($connect, $sql);  
           }
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?>