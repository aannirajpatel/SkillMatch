<!DOCTYPE html>
<html>

<head>
    <title>SkillMatch</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="../css/signup.css" rel="stylesheet" />
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

if (isset($_POST['username'])){
	$username = stripslashes($_POST['username']);
	$username = mysqli_real_escape_string($con,$username);
	
	$fname = stripslashes($_POST['fname']);
	$fname = mysqli_real_escape_string($con,$fname);
	
	$lname = stripslashes($_POST['lname']);
	$lname = mysqli_real_escape_string($con,$lname);
	
	$email = stripslashes($_POST['email']);
	$email = mysqli_real_escape_string($con,$email);
	
	$password = stripslashes($_POST['password']);
	$password = mysqli_real_escape_string($con,$password);
	
	$chk = mysqli_query($con,"SELECT * FROM user_info WHERE reg_no = '$username'");
	if(mysqli_num_rows($chk)>0) {header('Location:signupexists.php');}
	else{
	$query = "INSERT into `user_info` (reg_no, password, email,first_name,last_name)
		VALUES ('$username', '".md5($password)."', '$email','$fname','$lname')";
	
	$result = mysqli_query($con,$query);
	if($result){
		header('Location:signupsuccess.php');
    }
	}
}
else{	
?>
    <nav>
        <ul>
            <li class="active"><a href="../signup/signup.php">Sign Up</a></li>
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
    <div id="shade">
        <header>
            <h1>Sign Up for SkillMatch!</h1></header>
        <section class="about">
            <article>
                <form name="register" id="registerForm" style="color:black" action="" method="post" onsubmit="return validateF()">
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






















