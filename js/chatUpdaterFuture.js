$(document).ready(){
	$(document).on('click','#makeRequest',sendMessage())
setInterval(function(){
  updateChat();
 }, 5000);
}
 function updateChat()
 {
  $.ajax({
   url:"../chat/fetchChat.php",
   method:"POST",
   success:function(data){
    $('#').html(data);
   }
  });
 };

function sendMessage(){
	$.ajax({
   url:"../chat/sendMessage.php",
   method:"POST",
   data:$('#add_name').serialize(),
   success:function(data){
    alert(data);
   }
  });
};