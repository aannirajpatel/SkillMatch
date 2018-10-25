<?php
$contactResult=mysqli_query($con,"SELECT * FROM contact WHERE senderID='$regno' AND (wait=1 OR reject=1)") or die("Error while fetching requests by you");
            if(mysqli_num_rows($contactResult) > 0){
                while($contactResult1=mysqli_fetch_array($contactResult)){
                    $rid=$contactResult1['receiverID'];
                    $waiting = $contactResult1['wait'];
                    $rejected = $contactResult1['reject'];
                    $contactResult2=mysqli_query($con,"SELECT first_name,last_name FROM `user_info` WHERE reg_no='$rid'");
                    $contactResult2=mysqli_fetch_array($contactResult2);
                    $fname=$contactResult2['first_name'];
                    $lname=$contactResult2['last_name'];
                    echo "<div class=\"request\">";
                    echo "<h3>To: <a href=\"../search/profileshow.php?query=$rid\">$fname $lname ($rid)</a></h3>";
                    echo "<br>";
                    $status="";
                    if($waiting) $status="Waiting for acceptance by receiver";
                    if($rejected) $status="Contact request rejected";
                    echo "<h3>Status: $status</h3>";
                    echo "</div>";
                    echo "<br>";
                }
            }
            else{
                echo "<div class=\"request\"><h3>No pending or rejected requests</h3></div>";
            }
?>