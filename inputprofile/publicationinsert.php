 <?php  
	include('../includes/auth.php');
  include('../includes/db.php');  
 $number = count($_POST["name"]);
 if($number > 0)  
 {  	 $reg =$_SESSION["username"];
	  mysqli_query($con,"DELETE FROM publications WHERE reg_no = '$reg'");
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != '') && trim($_POST["num"][$i] != ''))  
           {  
        
				$sname  = mysqli_real_escape_string($con, $_POST["name"][$i]);
				$snum  = mysqli_real_escape_string($con, $_POST["num"][$i]);
               $sin  = mysqli_real_escape_string($con, $_POST["in"][$i]);
		      $syear  = mysqli_real_escape_string($con, $_POST["year"][$i]);
				
				$sql = "INSERT INTO publications(reg_no,publication_domain,publication_title,published_in,pub_year) VALUES('".$reg."','".$sname."','".$snum."','".$sin."','".$syear."')";  
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