$(document).ready(function(){
$('#messageForm').submit(function(e){
	console.log('Hi');
	e.preventDefault();
	$.ajax({
   url:"../chat/sendMessage.php",
   method:"POST",
   data:$('#messageForm').serialize(),
   success:function(info){
    alert(info);
    $('#sendBox').val("");
    console.log(info);
   }
  })
});



});