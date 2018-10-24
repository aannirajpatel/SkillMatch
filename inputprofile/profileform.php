<?php
include("../includes/auth.php");
?>

<html>  
      <head>  
           <title>skillmatch</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <div class="container">  
                <br />  
                <br />  
                <h2 align="center">Profile Details</h2>  
                <div class="form-group">  
                     <form name="add_name" id="add_name">  
                          <div class="table-responsive">  
                                 
                                   <label for="year">Date of Birth</label><br/>
                                   <input style="width:12vw" type="date" name="year" placeholder="Date of Birth" class="form-control year_list" />
                                   <label for="num">Contact Number</label><br/>
                                   <input style="width:12vw" type="text" name="num" placeholder="Contact number" class="form-control num_list" />
                                   <label for="in">City</label><br/>
                                   <input style="width:12vw" type="text" name="in" placeholder="City" class="form-control in_list" />
                                   <label for="bio">Bio</label><br/>
                              <textarea type="text" name="bio" style="height:10vw;width:;vertical_align:top" placeholder="Enter something about yourself. This will be displayed when people search for you!" class="form-control in_list"></textarea>
                              <input type="button" name="submit" id="submit" class="btn btn-info" value="Next" />  
                          </div>  
                         
                     </form>  
                </div>  
           </div>  
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
 });  
 </script>