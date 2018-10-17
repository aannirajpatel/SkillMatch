 <?php  
 $connect = mysqli_connect("localhost", "root", "", "skillmatch");  
 $number = count($_POST["name"]);
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != '') && trim($_POST["num"][$i] != ''))  
           {  
                $reg = "17BCE0940"; /*"17BCE0897" WILL CHANGE TO $_SESSION["regID"] for an active login session*/
				$sname  = mysqli_real_escape_string($connect, $_POST["name"][$i]);
				$snum  = mysqli_real_escape_string($connect, $_POST["num"][$i]);
               	$send  = mysqli_real_escape_string($connect, $_POST["end"][$i]);
		
				$sql = "INSERT INTO internships(reg_no,recuitor,istart,iend) VALUES('".$reg."','".$sname."','".$snum."','".$send."')";  
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