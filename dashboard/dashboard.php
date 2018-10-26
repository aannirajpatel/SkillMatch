<?php
	include("../includes/auth.php");
	require('../includes/db.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>SkillMatch</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet" />
</head>

<body>
<?php
$regno =$_SESSION['username'];
$bio = mysqli_fetch_array(mysqli_query($con,"SELECT bio FROM user_info WHERE reg_no='$regno'"))['bio'];
$acc=isset($_POST['accept']);
$rej=isset($_POST['reject']);
$ban=isset($_POST['ban']);
$sid="";
if($acc||$rej||$ban) $sid = $_POST['senderID'];
if($acc){
    echo "<script>alert('Accepted!');</script>";
    $contactExecQ = "UPDATE contact SET accept=1,reject=0,wait=0,ban=0 WHERE senderID='$sid'";
}

if($rej){
    $contactExecQ = "UPDATE contact SET accept=0,reject=1,wait=0,ban=0";
}

if($ban){
    $contactExecQ = "UPDATE contact SET accept=0,reject=0,wait=0,ban=1";
}

if($acc||$rej||$ban) mysqli_query($con,$contactExecQ) or die("Error while executing your $acc request");
?>
    <nav>
        <ul>
            <li><a href="../logout/logout.php">Logout</a></li>
			<li class="active"><a>User</a></li>
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
        <h1>Hello <?php echo $_SESSION['fname']; ?>! Welcome to Dashboard</h1></header>
    <section class="profile">
        <article id="profileDetails">
            <h2>Profile Details <a href = "../inputprofile/profileform.php"><img src="../img/edit.png" height="25 px" width="25 px"></img></a>
</h2>             <br>
<h3>Bio</h3><hr><?php echo $bio;?>
<br><br>
            <h3>Skills</h3>
            <hr>
            <table>
                <thead>
                    <th>Skill</th>
                    <th>Skill Level</th>
                </thead>
                
  <!-- add php here -->
<?php
$result = mysqli_query($con,"SELECT skillname, skilllevel FROM skills WHERE reg_no='$regno'");
if(mysqli_num_rows($result)){
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['skillname'] . "</td>";
echo "<td>" . $row['skilllevel'] . "</td>";
echo "</tr>";
}

echo "</table>";
}
else{
    echo "</table>";
    echo "You have not mentioned any skills yet";
    echo "<br><br>";
}
//mysqli_close($con);
?>
<br>

            
<h3>Languages known</h3>
            <hr>
            <table>
                <thead>
                    <th>Language</th>
                    <th>Proficiency Level</th>
                </thead>
                
  <!-- add php here -->
<?php
$rl = mysqli_query($con,"SELECT language_name, lang_level FROM languages WHERE reg_no='$regno'");
if(mysqli_num_rows($rl)){
while($row = mysqli_fetch_array($rl))
{
echo "<tr>";
echo "<td>" . $row['language_name'] . "</td>";
echo "<td>" . $row['lang_level'] . "</td>";
echo "</tr>";
}

echo "</table>";
}
else{
    echo "</table>";
    echo "You have not mentioned any languages that you know yet";
    echo "<br><br>";
}
//mysqli_close($con);
?>
<br>
                

<!-- ========================================================== new section ===================== -->

 <h3>Education</h3>
            <hr>
            <table>
                <thead>
                    <th>Institute Name</th>
                    <th>Board</th>
                    <th>Branch</th>
                    <th>Address</th>
                    <th>Join year</th>
                    <th>End year</th>
                </thead>
                
  <!-- add php here -->
<?php
$redu = mysqli_query($con,"SELECT institute_name, institute_board, branch, institute_address, joined_year, end_year FROM education WHERE reg_no='$regno'");
if(mysqli_num_rows($redu)){
    while($row = mysqli_fetch_array($redu))
    {
    echo "<tr>";
    echo "<td>" . $row['institute_name'] . "</td>";
    echo "<td>" . $row['institute_board'] . "</td>";
    echo "<td>" . $row['branch'] . "</td>";
    echo "<td>" . $row['institute_address'] . "</td>";
    echo "<td>" . $row['joined_year'] . "</td>";
    echo "<td>" . $row['end_year'] . "</td>";
    echo "</tr>";
    }

    echo "</table>";
}
else{
    echo "</table>";
    echo "You have not mentioned any educational institutions yet";
    echo "<br><br>";
}
//mysqli_close($con);
?>
<br>
 
                <!-- ==================================================== internships ================= -->
<h3>Internships</h3>
            <hr>
            <table>
                <thead>
                    <th>Company</th>
                    <th>Start from</th>
                    <th>End</th>
                </thead>
                
  <!-- add php here -->
<?php
$rint = mysqli_query($con,"SELECT recuitor, istart, iend FROM internships WHERE reg_no='$regno'");
if(mysqli_num_rows($rint)){
    while($row = mysqli_fetch_array($rint))
    {
    echo "<tr>";
    echo "<td>" . $row['recuitor'] . "</td>";
    echo "<td>" . $row['istart'] . "</td>";
    echo "<td>" . $row['iend'] . "</td>";
    echo "</tr>";
    }

    echo "</table>";
}
else{
    echo "</table>";
    echo "You have not mentioned any internships yet";
    echo "<br><br>";
}
//mysqli_close($con);
?>
<br>
 
                <!-- ==================================================== publications ================= -->
<h3>Publications</h3>
            <hr>
            <table>
                <thead>
                    <th>Research Domain</th>
                    <th>Title</th>
                    <th>Where</th>
                    <th>When</th>
                    
                </thead>
                
  <!-- add php here -->
<?php
$rpub = mysqli_query($con,"SELECT publication_domain, publication_title, published_in, pub_year FROM publications WHERE reg_no='$regno'");
if(mysqli_num_rows($rpub)){
while($row = mysqli_fetch_array($rpub))
{
    echo "<tr>";
    echo "<td>" . $row['publication_domain'] . "</td>";
    echo "<td>" . $row['publication_title'] . "</td>";
    echo "<td>" . $row['published_in'] . "</td>";
    echo "<td>" . $row['pub_year'] . "</td>";
    echo "</tr>";
}

echo "</table>";
}
else{
    echo "</table>";
    echo "You have not mentioned any research publications by yourself yet";
    echo "<br><br>";
}
//mysqli_close($con);
?>
<br>
 
                <!-- ==================================================== Projects ================= -->
<h3>Projects</h3>
            <hr>
            <table>
                <thead>
                    <th>Project Domain</th>
                    <th>Title</th>
                </thead>
                
  <!-- add php here -->
<?php
$rproj = mysqli_query($con,"SELECT project_domain, project_title FROM projects WHERE reg_no='$regno'");
if(mysqli_num_rows($rproj)){
    while($row = mysqli_fetch_array($rproj))
    {
    echo "<tr>";
    echo "<td>" . $row['project_domain'] . "</td>";
    echo "<td>" . $row['project_title'] . "</td>";
    echo "</tr>";
    }

    echo "</table>";
}
else{
    echo "</table>";
    echo "You have not mentioned any projects yet";
    echo "<br><br>";
}
//mysqli_close($con);
?>
<br>
                 <!-- ==================================================== certificate ================= -->
<h3>Certificates</h3>
            <hr>
            <table>
                <thead>
                    <th>Field</th>
                    <th>Issued by</th>
                    <th>Enrolled in</th>
                    <th>URL</th>
                    
                </thead>
                
  <!-- add php here -->
<?php
$rcer = mysqli_query($con,"SELECT certificate_field, issued_by, certified_year, certificate_URL FROM certificate WHERE reg_no='$regno'");
if(mysqli_num_rows($rcer)){
    while($row = mysqli_fetch_array($rcer))
    {
    echo "<tr>";
    echo "<td>" . $row['certificate_field'] . "</td>";
    echo "<td>" . $row['issued_by'] . "</td>";
    echo "<td>" . $row['certified_year'] . "</td>";
    echo "<td>" . $row['certificate_URL'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "</table>";
    echo "You have not mentioned any certificates yet";
    echo "<br><br>";
}
//mysqli_close($con);
?>
<br>
 
                                <!-- ====================================================   clubs ================= -->
<h3>Clubs</h3>
            <hr>
            <table>
                <thead>
                    <th></th>
                </thead>
                
  <!-- add php here -->
<?php
$rclub = mysqli_query($con,"SELECT club_name FROM clubs WHERE reg_no='$regno'");
if(mysqli_num_rows($rclub))
{
    while($row = mysqli_fetch_array($rclub))
    {
    echo "<tr>";
    echo "<td>" . $row['club_name'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "</table>";
    echo "You have not mentioned any clubs yet";
    echo "<br><br>";
}
//mysqli_close($con);
?>
<br>
<h3>Contact Information</h3>
<hr>
<?php
    $rcontact = mysqli_query($con,"SELECT * FROM user_info WHERE reg_no='$regno'");
    $row = mysqli_fetch_array($rcontact);
    $myphone=$row['phone'];
    $myemail=$row['email'];
    $mycity=$row['city'];
    echo "<table id=\"contactTable\">";
    echo "<thead><th>Phone</th><th>E-Mail</th><th>City</th>";
    echo "<tr><td><a href=\"tel:$myphone\">$myphone</a></td><td><a href=\"mailto:$myemail\">$myemail</a></td><td>$mycity</td>";
    echo "</table>";
?>
                <!-- ==================================================== done ================= -->


              
<br>
            <br>
        </article>
        <article class="contactReq">
            <h2>Contact Requests</h2>
            <br>
            <?php
            $contactResult=mysqli_query($con,"SELECT * FROM contact WHERE receiverID='$regno' AND wait=1") or die("Error while fetching contact requests");
            if(mysqli_num_rows($contactResult)>0){
                while($contactResult1=mysqli_fetch_array($contactResult)){
                    $sid=$contactResult1['senderID'];
                    $contactResult2=mysqli_query($con,"SELECT first_name,last_name FROM `user_info` WHERE reg_no='$sid'");
                    $contactResult2=mysqli_fetch_array($contactResult2);
                    $fname=$contactResult2['first_name'];
                    $lname=$contactResult2['last_name'];
                    echo "<div class=\"request\">";
                    echo "<h3>From: $fname $lname ($sid)</h3>";
                    echo "<br>";
                    echo "<form method=\"POST\" action=\"\">";
                        echo "<input type=\"hidden\" name=\"senderID\" value=\"$sid\"></input>";
                        echo "<ul>";
                            echo "<li>";
                            echo "<input type=\"submit\" name=\"accept\" value=\"Accept\" id=\"acceptRequest\"></input>";
                            echo "</li>";
                            echo "<li>";
                            echo "<input type=\"submit\" name=\"reject\" value=\"Reject\" id=\"rejectRequest\"></input>";
                            echo "</li>";
                            echo "<li>";
                            echo "<input type=\"submit\" name=\"ban\" value=\"Ban\" id=\"banRequest\"></input>";
                            echo "</li>";
                        echo "</ul>";
                    echo "</form>";
                    echo "</div>";
                    echo "<br>";
                }
            }
            else{
                echo "<div class=\"request\" id=\"noRequests\"><h3>No contact requests to show.</h3></div>";
            }
?>
        </article>
<br>
        <article class="contactReq">
            <h2>Requests by you</h2>
            <br>
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
                echo "<div class=\"request\" id=\"noRequests\"><h3>No pending or rejected requests</h3></div>";
            } 
?>
        </article>
<br>
        <article class="contactReq">
            <h2>Your Acquaintances</h2>
            <br>
            <?php
            $contactResult=mysqli_query($con,"SELECT * FROM contact WHERE accept=1 AND (senderID='$regno' OR receiverID='$regno')") or die("Error while fetching your acquaintances");
            if(mysqli_num_rows($contactResult) > 0){
                while($contactResult1=mysqli_fetch_array($contactResult)){
                    $rid=$contactResult1['receiverID'];
                    if($rid==$regno){
                        $rid=$contactResult1['senderID'];
                    }
                    //$rid must store userid of friend of current user
                    $contactResult2=mysqli_query($con,"SELECT * FROM `user_info` WHERE reg_no='$rid'");
                    $contactResult2=mysqli_fetch_array($contactResult2);
                    $fname=$contactResult2['first_name'];
                    $lname=$contactResult2['last_name'];
                    $phone=$contactResult2['phone'];
                    $email=$contactResult2['email'];
                    $city=$contactResult2['city'];
                    echo "<div class=\"request\">";
                    echo "<h3><a href=\"../search/profileshow.php?query=$rid\">$fname $lname ($rid)</a></h3>";
                    echo "<br>";
                    //echo "<h4>Contact Details</h4>";
                    echo "<table id=\"contactTable\">";
                    echo "<thead><th>Phone</th><th>E-Mail</th><th>City</th>";
                    echo "<tr><td><a href=\"tel:$phone\">$phone</a></td><td><a href=\"mailto:$email\">$email</a></td><td>$city</td>";
                    echo "</table>";
                    echo "<br>";
                    echo "<form action=\"../chat/chat.php\" method=\"POST\"><input type=\"hidden\" name=\"couser\" value=\"$rid\"></input><button id=\"makeRequest\" type=\"submit\" value=\"$rid\">CHAT</button></form>";
                    echo "</div>";
                    echo "<br>";
                }
            }
            else{
                echo "<div class=\"request\" id=\"noRequests\"><h3>No aquaintances... Try building up contacts with this platform!</h3></div>";
            }
?>
        </article>
    </section>
</body>

</html>