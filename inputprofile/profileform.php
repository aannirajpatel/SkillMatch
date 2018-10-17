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
                               <table class="table table-bordered" id="dynamic_field">  
                                   <label for="year">Date of Birth</label><br/>
                                   <tr><input type="date" name="year" placeholder="Date of Birth" class="form-control year_list" /></tr> 
                                   <label for="num">Contact Number</label><br/>
                                   <tr><input type="text" name="num" placeholder="Contact number" class="form-control num_list" /></tr>  
                                   <label for="in">City</label><br/>
                                   <tr><input type="text" name="in" placeholder="City" class="form-control in_list" /></tr>  
                                   <br>
                                   <br>
                                   
                                   
                               </table>  
                              
                              
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