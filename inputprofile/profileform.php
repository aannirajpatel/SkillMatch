<?php
	include('../includes/auth.php');
	require('../includes/db.php');
?>
 
<!DOCTYPE html>
<html>

<head>
    <title>SkillMatch</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="../css/forms.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
</head>

<body>

    <nav>
        <ul>
            <li><a href="../logout/logout.php">Logout</a></li>
            <li><a href="../dashboard/dashboard.php">Dashboard</a></li>
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
        <h1>Profile Details Insertion</h1>
        <div id="formnav" class="forms" style="width: 62vw;top:0vh;padding:5px;color:black"><a class="nfactive" href="profileform.php">Profile</a><a href="skillform.php">Skill</a><a href="languageform.php">Languages</a><a href="educationform.php">Education</a><a href="internshipform.php">Internships</a><a href="publicationform.php">Publications</a><a href="projectform.php">Projects</a><a href="certificateform.php">Certificates</a><a href="Clubform.php">Clubs</a></div>
    </header>
    <section class="forms">
        <article>
                  <h2>Enter your contact information and bio</h2>
                     <form name="add_name" id="add_name">  
                                   <label for="year">Date of Birth</label><br>
                                   <input style="width:12vw" type="date" name="year" placeholder="Date of Birth" class="form-control year_list" /><br>
                                   <label for="num">Contact Number</label><br>
                                   <input style="width:12vw" type="text" name="num" placeholder="Contact number" class="form-control num_list" /><br>
                                   <label for="in">City</label><br>
                                   <input style="width:12vw" type="text" name="in" placeholder="City" class="form-control in_list" />
                                   <br>
                                   <label for="bio">Bio</label><br>
                              <textarea type="text" name="bio" style="height:10vw;width:20vw;vertical_align:top" placeholder="Enter something about yourself. This will be displayed when people search for you!" class="form-control in_list"></textarea>
                              <br>
                              <input style="width:auto;" type="button" name="submit" id="submit" class="btn btn-info" value="Submit and Next"/>
	                            <input style="width:auto;" type="button" name="skip" id="skip" class="btn btn-info" value="Skip and Next"/>
                     </form>  
     </article>
</section>
      </body>  
 </html>  
 
<script>  
 $(document).ready(function(){  
 $('#submit').click(function(){            
           $.ajax({  
                url:"profileinsert.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);
                    window.location.replace('skillform.php');
                }
           });  
      }); 
       $('#skip').click(function(){
      	window.location.replace("skillform.php");	
      });   
 });  
 </script>