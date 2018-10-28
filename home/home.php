<?php
	include("../includes/auth.php");
?>


<!DOCTYPE html>
<html>

<head>
    <title>SkillMatch</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet" />
</head>

<body>

    <nav>
        <ul>
            <li><a href="../logout/logout.php">Logout</a></li>
            <li><a href="../dashboard/dashboard.php">Dashboard</a></li>
            <li class="active"><a href="./home.php">Home</a></li>
            <li>
                <form name="searchForm" id="searchForm" action="../search/search.php">

                    <input type="text" name="query" id="searchInput" />
                    <input type="submit" value="Search" id="searchButton" />

                </form>
            </li>
            <li id="logo"><a href="./home.php">SkillMatch</a></li>
        </ul>
    </nav>

    <header>
        <h1>Welcome to SkillMatch: A human resource database and network.</h1></header>
    <section class="about">
        <article>
            <h3 style="color: black;">
		SkillMatch is a website that lets you search for skilled, accomplished and creative people all over VIT University!
		<br><br>Search any skills, from technical and engineering skills to design and oratory skills!
		</h3>
        </article>

    </section>

</body>

</html>