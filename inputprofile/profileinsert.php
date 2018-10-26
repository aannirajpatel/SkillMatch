<?php
include("../includes/auth.php");
include('../includes/db.php'); 
$reg = $_SESSION["username"]; 
$syear  = mysqli_real_escape_string($con, $_POST["year"]);
$snum  = mysqli_real_escape_string($con, $_POST["num"]);
$sin  = mysqli_real_escape_string($con, $_POST["in"]);
$bio = mysqli_real_escape_string($con,$_POST["bio"]);
$sql = "UPDATE user_info SET DOB='$syear', phone=$snum, city='$sin',bio='$bio' WHERE reg_no = '$reg'";  
mysqli_query($con, $sql);
echo "Data Inserted";   
?>