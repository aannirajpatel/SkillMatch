<?php
require('../includes/auth.php');
include('../includes/db.php');
$mSet = isset($_POST['couser']);
$user = $_SESSION['username'];
$couser = $_POST['couser'];
$msg = $_POST['message'];
if($mSet){
    $newMessageQ = "INSERT INTO chat (senderID,receiverID,message) VALUES ('$user','$couser','$msg')";
    mysqli_query($con,$newMessageQ) or die("Error while sending message");
    echo "Message sent";
}
?>