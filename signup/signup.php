<!DOCTYPE html>
<html>

<head>
    <title>SkillMatch</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="../css/signup.css" rel="stylesheet" />
</head>

<body>


<?php

require('../includes/db.php');

if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
	
	$fname = stripslashes($_REQUEST['fname']);
	$fname = mysqli_real_escape_string($con,$fname);
	
	$lname = stripslashes($_REQUEST['lname']);
	$lname = mysqli_real_escape_string($con,$lname);
	
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	
	$query = "INSERT into `user_info` (reg_no, password, email,first_name,last_name)
		VALUES ('$username', '".md5($password)."', '$email','$fname','$lname')";
	
	$result = mysqli_query($con,$query);
	if($result){
        echo "<div class='form'>
				<h3>You are registered successfully.</h3>
				<br/>Click here to <a href='../login/login.php'>Login</a></div>";
    }
}
else{	
?>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li class="active"><a href="../signup/signup.php">Sign Up</a></li>
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
    <div id="shade">
        <header>
            <h1>Sign Up for SkillMatch!</h1></header>
        <section class="about">
            <article>
                <form name="register" id="registerForm" style="color:black" action="" method="post">
                    <label for="username">Registration ID</label>
                    <input type="text" name="username" id="regId" placeholder="Enter your registration ID" required="true"/>
                    <br/>
                    <label for="email">E-mail ID</label>
                    <input type="email" name="email" id="emailId" placeholder="Enter your e-mail ID" required="true"/>
                    <br/>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="pass" placeholder="Enter your password" required="true"/>
                    <br/>
					<label for="fname">First Name</label>
                    <input type="text" name="fname" id="" placeholder="Enter your First Name" required="true" />
                    <br/>
					<label for="lname">Last Name</label>
                    <input type="text" name="lname" id="" placeholder="Enter your Last Name" required="true"/>
                    <br/>
                    <input type="submit" value="Submit" />
                </form>
            </article>

        </section>
    </div>
<?php } ?>
</body>

</html>






















