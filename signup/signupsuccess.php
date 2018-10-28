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
        <h1>Sign Up Success</h1></header>
    <section class="logout">
        <article style="text-align:left;">You may now login by clicking <a href="../login/login.php"> here</a>.</article>
    </section>
</body>

</html>