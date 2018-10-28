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
            <li><a href="../signup/signup.php">Sign Up</a></li>
            <li><a href="../login/login.php">Login</a></li>
            <li><a href="../index.php">Home</a></li>
            <li>
                <form name="searchForm" id="searchForm" action="../search/searchnonlogin.php">

                    <input type="text" name="query" id="searchInput" />
                    <input type="submit" value="Search" id="searchButton" />

                </form>
            </li>
            <li id="logo"><a href="../index.php">SkillMatch</a></li>
        </ul>
    </nav>
    <header>
        <h1>Account already exists</h1></header>
    <section class="logout" style="width:20vw;">
        <article style="text-align:center;">An account with the username you wanted to signup with already exists. Try <a href="signup.php">signing up</a> with a different registration number.</article>
    </section>
</body>

</html>