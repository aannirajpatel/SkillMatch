$(document).ready(){
setInterval(function(){
  updateChat();
 }, 5000);

 function updateChat()
 {
  $.ajax({
   url:"../chat/fetchChat.php",
   method:"POST",
   success:function(data){
    $('#').html(data);
   }
  })
 }

}