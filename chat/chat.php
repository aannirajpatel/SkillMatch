<?php
    require('../includes/db.php');
    include("../includes/auth.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>SkillMatch</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="../css/chat.css" rel="stylesheet" />
    <script src="../js/jquery.js"></script>
</head>

<body>
<?php
//connection variable is $con declared in ../includes/db.php
$couser = $_POST['couser'];
$user = $_SESSION['username'];
$cousernameRow = mysqli_query($con,"SELECT first_name,last_name from user_info where reg_no='$couser'") or die("Unable to find name of the user you are chatting with. Signup or profile creation may be improperly done by that user.");
$cousernameResult = mysqli_fetch_array($cousernameRow);
$fname = $cousernameResult['first_name'];
$lname = $cousernameResult['last_name'];
?>
    <nav>
        <ul>
            <li><a href="../logout/logout.php">Logout</a></li>
            <li><a href="../dashboard/dashboard.php">Dashboard</a></li>
            <li>
                <form name="searchForm" id="searchForm" action="../search/search.php" method="get">
                    <input type="text" name="query" id="searchInput" />
                    <input type="submit" value="Search" id="searchButton" />
                </form>
            </li>
            <li id="logo"><a href="../home.php">SkillMatch</a></li>
        </ul>
    </nav>
    <header>
        <h1>Chat With <?php echo $fname." ".$lname." (".$couser.")"; ?><span id="onlineOrOffline"></span></h1></header>
    <section class="chat">
        <div class="sendmessages">
            <form id="messageForm" method="post">
                <textarea id="sendBox" type="text" name="message" placeholder="Enter your message here"></textarea>
                <?php
                    echo "<input type=\"hidden\" name=\"couser\" value=\"$couser\"></input>";
                ?>
                <button type="submit" name="submitMessage" id="makeRequest">SEND</button>
            </form>
        </div>
        <div class="showmessages">
            <div class="received">
                This is a sample message. This is a sample message. This is a sample message. This is a sample message. This is a sample message. This is a sample message. This is a sample message. This is a sample message. This is a sample message. This is a sample message. This is a sample message. This is a sample message.
                <div id="statsDisp">[Timestamp: 10:00PM]</div>
            </div>
            <div class="sent">
                This is a sample message. This is a sample message. This is a sample message. This is a sample message. This is a sample message. This is a sample message. This is a sample message. This is a sample message. This is a sample message. This is a sample message. This is a sample message. This is a sample message.
                <div id="statsDisp"> [Timestamp:09:00PM, Seen: Yes] <!-- $seen --> </div>
            </div>
        </div>
    </section>
</body>

</html>
<script src="../js/chatUpdater.js"></script>