<?php
	require('../includes/db.php');
	include("../includes/auth.php");
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
/*$con = mysqli_connect("localhost", "root", "", "skillmatch");  
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}*/
$regno = $_GET['query'];
$name = mysqli_query($con,"SELECT first_name,last_name from user_info where reg_no='$regno'");
$name = mysqli_fetch_array($name);
$fname = $name['first_name'];
$lname = $name['last_name'];
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
        <h1>Profile of <?php echo $fname." ".$lname." (".$regno.")"; ?></h1></header>
    <section class="profile">
        <article id="profileDetails">
            <h2>Profile Details</h2>
			<br>
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

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['skillname'] . "</td>";
echo "<td>" . $row['skilllevel'] . "</td>";
echo "</tr>";
}

echo "</table>";

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

while($row = mysqli_fetch_array($rl))
{
echo "<tr>";
echo "<td>" . $row['language_name'] . "</td>";
echo "<td>" . $row['lang_level'] . "</td>";
echo "</tr>";
}

echo "</table>";

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

while($row = mysqli_fetch_array($rint))
{
echo "<tr>";
echo "<td>" . $row['recuitor'] . "</td>";
echo "<td>" . $row['istart'] . "</td>";
echo "<td>" . $row['iend'] . "</td>";
echo "</tr>";
}

echo "</table>";

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

while($row = mysqli_fetch_array($rproj))
{
echo "<tr>";
echo "<td>" . $row['project_domain'] . "</td>";
echo "<td>" . $row['project_title'] . "</td>";
echo "</tr>";
}

echo "</table>";

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

while($row = mysqli_fetch_array($rclub))
{
echo "<tr>";
echo "<td>" . $row['club_name'] . "</td>";
echo "</tr>";
}

echo "</table>";

//mysqli_close($con);
?>
<br>

                <!-- ==================================================== done ================= -->


              
<br>
            <br>
        </article>
        <article id="contactReq">
            <?php
				echo "<form action=\"request.php?query=$regno\" method=\"GET\"><input id=\"makeRequest\" type=\"submit\" value=\"Request contact details\"></form>";
			?>
            <!--
            <div class="request">
                <h3>From: Sender's Username</h3>
                <br>
                <ul>
                    <li>
                        <input type="button" value="Request" id="acceptRequest" />
                    </li>
                    <li>
                        <input type="button" value="Reject" id="rejectRequest" />
                    </li>
                    <li>
                        <input type="button" value="Ban requests from this user" id="banRequest" />
                    </li>
                </ul>
            </div>
            <br>
            <div class="request">
                <h3>From: Sender's Username</h3>
                <br>
                <ul>
                    <li>
                        <input type="button" value="Accept" id="acceptRequest" />
                    </li>
                    <li>
                        <input type="button" value="Reject" id="rejectRequest" />
                    </li>
                    <li>
                        <input type="button" value="Ban requests from this user" id="banRequest" />
                    </li>
                </ul>
            </div>
		-->
        </article>
    </section>
</body>

</html>