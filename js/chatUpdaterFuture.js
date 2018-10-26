$(document).ready(){
  alert(toString($('#add_name').serialize()));
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
   data:{"couser":$('#couserContainer').value},
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