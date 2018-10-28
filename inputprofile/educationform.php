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
        <h1>Education Details Insertion</h1>
        <div id="formnav" class="forms" style="width: 62vw;top:0vh;padding:5px;color:black"><a href="profileform.php">Profile</a><a href="skillform.php">Skill</a><a href="languageform.php">Languages</a><a class="nfactive" href="educationform.php">Education</a><a href="internshipform.php">Internships</a><a href="publicationform.php">Publications</a><a href="projectform.php">Projects</a><a href="certificateform.php">Certificates</a><a href="Clubform.php">Clubs</a></div>
    </header>
    <section class="formsbig">
        <article>
                  <h2>Enter your education details</h2>
      
                     <form name="add_name" id="add_name">  
                          
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="name[]" placeholder="Institute name" class="form-control name_list" /></td>  
										 <td><input type="text" name="board[]" placeholder="Enter board / University" class="form-control board_list" /></td>  
                                        <td><input type="text" name="branch[]" placeholder="Enter your branch" class="form-control branch_list" /></td>  
                                         <td><input type="text" name="city[]" placeholder="Enter city" class="form-control city_list" /></td>  
                                          <td><input type="date" name="in[]" placeholder="Join in" class="form-control in_list" /></td>  
                                         <td><input type="date" name="year[]" placeholder="Graduated on" class="form-control year_list" /></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>  
                               <input style="width:auto;" type="button" name="submit" id="submit" class="btn btn-info" value="Submit and Next"/>  
  							  <input style="width:auto;" type="button" name="skip" id="skip" class="btn btn-info" value="Skip and Next"/>
                   
                     </form>  
   </article>
</section>
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Institute name" class="form-control name_list" /></td><td><input type="text" name="board[]" placeholder="Enter board / University" class="form-control board_list" /></td><td><input type="text" name="branch[]" placeholder="Enter your branch" class="form-control branch_list" /></td><td><input type="text" name="city[]" placeholder="Enter city" class="form-control city_list" /></td><td><input type="date" name="in[]" placeholder="Join in" class="form-control in_list" /></td><td><input type="date" name="year[]" placeholder="Graduated on" class="form-control year_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"educationinsert.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                    window.location.replace("internshipform.php");
                }  
           });  
      });
       $('#skip').click(function(){
      	window.location.replace("internshipform.php");	
      });    
 });  
 </script>