<?php
session_start();
// Destroying All Sessions
if(session_destroy())
{
?>

<!DOCTYPE html>
<html>

<head>
    <title>SkillMatch</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="../css/logout.css" rel="stylesheet" />
</head>

<body>

    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../signup/signup.php">Sign Up</a></li>
            <li><a href="../login/login.php">Login</a></li>
            <li>
                <form name="searchForm" id="searchForm" action="../search/searchresultdemo.html">

                    <input type="text" name="searchText" id="searchInput" />
                    <input type="submit" value="Search" id="searchButton" />

                </form>
            </li>
            <li id="logo"><a href="#">SkillMatch</a></li>
        </ul>
    </nav>
    <header>
        <h1>You Have Logged Out</h1></header>
    <section class="logout">
        <article>See you again!</article>
    </section>
</body>

</html>
<?php } ?>