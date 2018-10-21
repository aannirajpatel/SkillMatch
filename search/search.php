<?php
include('../includes/auth.php');
include('../includes/db.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>SkillMatch</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="../css/searchresult.css" rel="stylesheet" />
</head>

<body>

    <nav>
        
		<ul>
            <li><a href="../home.php">Home</a></li>
            <li><a href="../dashboard/dashboard.php">Dashboard</a></li>
            <li><a href="../logout/logout.php">Logout</a></li>
            <li>
                <form name="searchForm" id="searchForm" action="search.php">
                    <input type="text" name="query" id="searchInput" />
                    <input type="submit" value="Search" id="searchButton" />
                </form>
            </li>
            <li id="logo"><a href="#">SkillMatch</a></li>
        </ul>
		
    </nav>

    <header>
    
		<h1>Search Results</h1>
	
	</header>

    <section class="results">
	
	
	<?php
mysqli_select_db($con, "skillmatch") or die(mysql_error());
$query = $_GET['query'];
echo "<script>document.getElementById('searchInput').value='" . $query . "';</script>";
$min_len = 2;

if (strlen($query) >= $min_len) {
	$query = htmlspecialchars($query);
	$query = mysqli_real_escape_string($con, $query);
	$myquery = "SELECT `reg_no` FROM skills WHERE ";
	$query = explode("+", $query);

	// print_r($query);

	$count = 0;
	foreach($query as $key => $value) {
		$count++;
		if ($count > 1) {
			$myquery = $myquery . " OR (`skill_name` LIKE '%" . $value . "%')";
		}
		else {
			$myquery = $myquery . "(`skill_name` LIKE '%" . $value . "%')";
		}
	}

	$myquery = $myquery . " GROUP BY `reg_no` ORDER BY count(`reg_no`) DESC,`skill_level` DESC";
	$raw_results = mysqli_query($con, $myquery) or die(mysqli_error($con));

	// echo "Total ".mysqli_num_rows($raw_results)." search results for query: ".$query;

	if (mysqli_num_rows($raw_results) > 0) {
		while ($res = mysqli_fetch_array($raw_results)) {
			$myreg = $res['reg_no'];
			$detq = "SELECT first_name,last_name from user_info where reg_no='$myreg'";
			$detr = mysqli_fetch_array(mysqli_query($con, $detq));
			echo "<article>" . $detr['first_name'] . " " . $detr['last_name'] . " (" . $res['reg_no'] . ")</article>";
		}
	}
	else {
		echo "<h2 align=\"center\">No results to show...</h2>";
	}
}
else {
	echo "<h2 align=\"center\">Enter a valid query...</h2>";
}     
	   ?>
    
	</section>

</body>

</html>