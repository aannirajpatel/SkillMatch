$(document).ready(function(){
$('#messageForm').submit(function(e){
	e.preventDefault();
	$.ajax({
		url:"../chat/sendMessage.php",
		method:"POST",
		data:$('#messageForm').serialize(),
		success:function(info){
			$('#sendBox').val("");
			console.log(info);
		}
	})
});
var old = "";
setInterval(function(){
	updateChat();
 }, 5000);

 function updateChat()
 {
  $.ajax({
   url:"../chat/fetchChat.php",
   method:"POST",
   data:{couser: couserno},
   success:function(chatData){
	if(old != chatData){
	old=chatData;
    $('.showmessages').html(chatData);
	$('#showmessagescont').scrollTop($('#showmessagescont')[0].scrollHeight);
	}
   }
  });
 };


});