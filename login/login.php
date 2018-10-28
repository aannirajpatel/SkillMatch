<!DOCTYPE html>
<html>

<head>
    <title>SkillMatch</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet" />
    <script type="text/javascript">
        function validateF(){
            var reg = document.getElementById('regId').value;
            var pass = document.getElementById('pass').value;
            var vitpattern = /^[0-9]{2}[a-zA-Z]{3}[0-9]{4}$/;
            if(vitpattern.test(reg) && pass.length>=5){
                reg = reg.toUpperCase();
                document.getElementById('regId').value = reg;
                return true;
            }
            else if(pass.length<5){
                alert('Password must be minimum 5 characters!');
                return false;
            }
            else{
                alert('Enter proper registration ID!');
            }
        }
    </script>
</head>

<body>


<?php

require('../includes/db.php');

session_start();

if(isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);

	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);

	$query = "SELECT * FROM `user_info` WHERE reg_no='$username' and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	
	$rows = mysqli_num_rows($result);
	if($rows==1){
	    $_SESSION['username'] = $username;
        $firstnameQuery = "SELECT `first_name` FROM `user_info` WHERE `reg_no` = '$username'";
		$fnameres = mysqli_query($con, $firstnameQuery) or die(mysqli_error($con));
		while ($fnamerow = mysqli_fetch_array($fnameres, MYSQLI_BOTH)) {
			$_SESSION['fname'] = $fnamerow['first_name'];
		}
	    header("Location: ../dashboard/dashboard.php");
	}
	else{
		echo "<div class='form'>
		<h3>Username/password is incorrect.</h3>
		<br/>Click here to <a href='login.php'>Login</a></div>";
	}
}

else{
	
?>



    <nav>
        <ul>
            <li><a href="../signup/signup.php">Sign Up</a></li>
            <li class="active"><a href="#">Login</a></li>
            <li><a href="../index.php">Home</a></li>
            <li>
                <form name="searchForm" id="searchForm" action="../search/searchnonlogin.php" method="GET">

                    <input type="text" name="query" id="searchInput" />
                    <input type="submit" value="Search" id="searchButton" />

                </form>
            </li>
            <li id="logo"><a href="../index.php">SkillMatch</a></li>
        </ul>
    </nav>

    <header>
        <h1>Login to your SkillMatch Account</h1></header>
    <section class="about">
        <article>
            <form name="login" id="loginForm" style="color:black" action="" method="post" onsubmit="return validateF()">
                <label for="username">Registration ID</label>
                <input type="text" name="username" id="regId" placeholder="Enter your registration ID" />
                <br/>
                <label for="password">Password</label>
                <input type="password" name="password" id="pass" placeholder="Enter your password" />
                <br/>
                <input type="submit" value="Submit" />
            </form>
            <br>
            <span style="color:black">New here? <a href="../signup/signup.php">sign up</a> here first!</span>
        </article>
    </section>
<?php } ?>
</body>

</html>