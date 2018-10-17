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

    <nav>
        <ul>
            <li><a href="../logout/logout.php">Logout</a></li>
			<li class="active"><a>User</a></li>
            <li>
                <form name="searchForm" id="searchForm" action="./searchresultdash.html">

                    <input type="text" name="searchText" id="searchInput" />
                    <input type="submit" value="Search" id="searchButton" />

                </form>
            </li>
            <li id="logo"><a href="../home.php">SkillMatch</a></li>
        </ul>
    </nav>
    <header>
        <h1><?php echo $_SESSION['fname']; ?>'s Dashboard</h1></header>
    <section class="profile">
        <article id="profileDetails">
            <h2>Profile Details</h2> <a href = "../inputprofile/profileform.php"><img src="../img/edit.png" height="50 px" width="40 px"></img></a>
            <br>
            <h3>Skills</h3>
            <hr>
            <table>
                <thead>
                    <th>Skill</th>
                    <th>Skill Level</th>
                </thead>
                <tr>
                    <td>Info</td>
                    <td>Info</td>
                </tr>
            </table>
            <br>
            <h3>Accomplishments</h3>
            <hr>
            <table>
                <thead>
                    <th>Publications</th>
                    <th>Certificates</th>
                    <th>Projects</th>
                    <th>Clubs</th>
                    <th>Awards</th>
                    <th>Languages</th>
                </thead>
                <tr>
                    <td>Info</td>
                    <td>Info</td>
                    <td>Info</td>
                    <td>Info</td>
                    <td>Info</td>
                    <td>Info</td>
                </tr>
            </table>
            <br>
            <h3>Education</h3>
            <hr>
            <table>
                <thead>
                    <th>Institution Name</th>
                    <th>Type of Institution</th>
                    <th>From Year</th>
                    <th>To Year</th>
                    <th>Branch</th>
                    <th>CGPA</th>
                </thead>
                <tr>
                    <td>Info</td>
                    <td>Info</td>
                    <td>Info</td>
                    <td>Info</td>
                    <td>Info</td>
                    <td>Info</td>
                </tr>
            </table>
            <br>
            <h3>Internships</h3>
            <hr>
            <table>
                <thead>
                    <th>Internship Work Done</th>
                    <th>Company</th>
                </thead>
                <tr>
                    <td>Info</td>
                    <td>Info</td>
                </tr>
            </table>
            <br>
            <br>
        </article>
        <article id="contactReq">
            <h2>Contact Requests</h2>
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
        </article>
    </section>
</body>

</html>