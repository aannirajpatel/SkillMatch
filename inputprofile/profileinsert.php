<?php
include("../includes/auth.php");

$connect = mysqli_connect("localhost", "root", "", "skillmatch");  
   
$reg = $_SESSION["username"]; 


$syear  = mysqli_real_escape_string($connect, $_POST["year"]);
$snum  = mysqli_real_escape_string($connect, $_POST["num"]);
$sin  = mysqli_real_escape_string($connect, $_POST["in"]);

$sql = "UPDATE user_info SET DOB='$syear', phone=$snum, city='$sin' WHERE reg_no = '$reg'";  
mysqli_query($connect, $sql);

echo $_POST["year"].$_POST["num"].$_POST["in"];
echo "Data Inserted";  
   
?>