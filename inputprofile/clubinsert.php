 <?php  
	include('../includes/auth.php');
 
$connect = mysqli_connect("localhost", "root", "", "skillmatch");  
 $number = count($_POST["name"]);
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           {  
                $reg =$_SESSION["username"];
                $sname  = mysqli_real_escape_string($connect, $_POST["name"][$i]);
				      
				$sql = "INSERT INTO clubs(reg_no,club_name) VALUES('".$reg."','".$sname."')";  
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