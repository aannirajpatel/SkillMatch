<!DOCTYPE html>
<html>

<head>
    <title>SkillMatch</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet" />
</head>

<body>

    <nav>
        <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="./signup/signup.php">Sign Up</a></li>
            <li><a href="./login/login.php">Login</a></li>
            <li>
                <form name="searchForm" id="searchForm" action="./search/search.php" method="GET">

                    <input type="text" name="searchText" id="searchInput" />
                    <input type="submit" value="Search" id="searchButton" />

                </form>
            </li>
            <li id="logo"><a href="#">SkillMatch</a></li>
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