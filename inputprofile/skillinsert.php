 <?php  
 include('../includes/auth.php');
 $connect = mysqli_connect("localhost", "root", "", "skillmatch");  
 $number = count($_POST["name"]);
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != '') && trim($_POST["num"][$i] != ''))  
           {  
                $reg = $_SESSION["username"];
				$sname  = mysqli_real_escape_string($connect, $_POST["name"][$i]);
				$snum  = mysqli_real_escape_string($connect, $_POST["num"][$i]);
				$sql = "INSERT INTO skills(reg_no,skill_name,skill_level) VALUES('".$reg."','".$sname."',".$snum.")";
				$test = "SELECT skill_name FROM skills WHERE reg_no = '$reg' and skill_name = '$sname'";
				$veri = mysqli_query($connect,$test);
				if(mysqli_num_rows($veri) == 0)
                mysqli_query($connect, $sql);
           }
      }
      echo "Data Inserted $sname";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?>