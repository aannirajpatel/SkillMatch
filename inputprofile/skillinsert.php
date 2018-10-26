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
				$sql = "INSERT INTO skills(reg_no,skillname,skilllevel) VALUES('".$reg."','".$sname."',".$snum.")";
				$test = "SELECT skillname FROM skills WHERE reg_no = '$reg' and skillname = '$sname'";
				$veri = mysqli_query($con,$test);
				if(mysqli_num_rows($veri) == 0)
                mysqli_query($con, $sql);
           }
      }
      echo "Data Inserted $sname";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?>