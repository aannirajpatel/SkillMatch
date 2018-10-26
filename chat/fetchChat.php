<?php
    require('../includes/db.php');
    include("../includes/auth.php");
    $user = $_SESSION['username'];
    $couser = $_POST['couser'];
    $msgQ = "SELECT * FROM chat WHERE (senderID='$user' AND receiverID='$couser') OR (senderID='$couser' AND receiverID='$user') ORDER BY sendtime ASC";
    $msgRows=mysqli_query($con,$msgQ) or die("Error fetching chat");
    $output = "";
    if(mysqli_num_rows($msgRows)>0){
    	while($chatData = mysqli_fetch_array($msgRows)){
    		$chatmsg = $chatData['message'];
    		if($chatData['senderID']==$user){
    			//output as green background message on RHS as its message by user.
    			$sendtime = $chatData['sendtime'];
    			$seen = "No";
    			if($chatData['seen']==1){
    				$seen = "Yes";
    			}
    			$output.='
    				<div class="sent">'.
    					$chatmsg.'
    					<div id="statsdisp"> [Send time: '.$sendtime.', Seen: '.$seen.']</div>
    				</div>
    			';
    		}
    
    		else{
    			//output as message on LHS as its message by couser.
    			$sendtime = $chatData['sendtime'];
    			$output.='
    				<div class="received"><div id="senderinfo"><a href="../search/profileshow.php?query='.$couser.'">'.$couser.'</a></div>'.
    					$chatmsg.'
    					<div id="statsdisp"> [Send time: '.$sendtime.']</div>
    				</div>
    			';
    			$updateSeenQ = "UPDATE chat SET seen=1 WHERE sendtime='$sendtime' and receiverID='$user' and senderID='$couser'";
    			mysqli_query($con,$updateSeenQ) or die("Failed to update seen column");
    		}
    	}
    
    	echo $output;
    
    }
    else{
    	echo "<div id=\"emptyChat\">Chat is empty.</div>";
    }
?>